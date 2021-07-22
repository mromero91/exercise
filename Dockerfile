# Other articles read on my research about laravel + Docker:
#  - https://laravel-news.com/multi-stage-docker-builds-for-laravel
#  - https://www.pascallandau.com/blog/php-php-fpm-and-nginx-on-docker-in-windows-10/
#
# I: Runtime Stage: ============================================================
# This is the stage where we build the runtime base image, which is used as the
# common ancestor by the rest of the stages, and contains the minimal runtime
# dependencies required for the application to run in production:

# Step 1: Use the official PHP 7.3.x Alpine image as base:
FROM php:7.4-fpm-alpine AS runtime

# Step 2: We'll set '/usr/src' path as the working directory:
WORKDIR /usr/src

# Step 3: We'll set the following environment variables:
# - The working dir as HOME - helps us to preserve the shell history
# - A directory outside of our workdir as COMPOSER_HOME
# - Add the app's executables, the project's PHP vendored executables, and the
#   global PHP vendored executables to $PATH:
ENV HOME=/usr/src \
    COMPOSER_HOME=/usr/local/composer \
    PATH=/usr/src/bin:/usr/src/vendor/bin:/usr/local/composer/vendor/bin:$PATH

# Step 4: Install the common runtime dependencies:
RUN apk add --no-cache \
  ca-certificates \
  less \
  libzip \
  libpng \
  mariadb-client \
  nginx \
  openssl \
  supervisor \
  su-exec \
  tzdata \
  zlib

# II: Development Stage: =======================================================
# In this stage we'll build the image used for development, including compilers,
# and development libraries. This is also a first step for building a releasable
# Docker image:

# Step 5: Start off from the "runtime" stage:
FROM runtime AS development

# Step 6: Install the development dependency packages with alpine package
# manager:
RUN apk add --no-cache \
  build-base \
  chromium \
  chromium-chromedriver \
  git \
  libpng-dev \
  libzip-dev \
  mariadb-dev \
  nodejs \
  npm \
  python2 \
  zlib-dev

# Step 7: Fix npm uid-number error
# - see https://github.com/npm/uid-number/issues/7
RUN npm install -g n && npm config set unsafe-perm true

# Step 8: Install PHP packages required by laravel:
RUN set -ex && docker-php-ext-install \
  bcmath \
  gd \
  pdo_mysql \
  zip

# Step 9: Install composer:
RUN export COMPOSER_VERSION=1.9.3 \
 && export COMPOSER_SHA256=551655c2fc81f4106508f42bbc4b24eabd34b022b13bc1e7d9642bf483d0a7d4 \
 && curl -o /usr/local/bin/composer "https://getcomposer.org/download/${COMPOSER_VERSION}/composer.phar" \
 && echo "${COMPOSER_SHA256}  /usr/local/bin/composer" | sha256sum -c - \
 && chmod a+x /usr/local/bin/composer

# Step 10 & 11: Define the arguments (with defaults) used to replicate the
# developer's user on the Docker Host, to enable generating files from inside
# the container (i.e. running php artisan make:model) with the host's user as
# their owner:

# Step 12: Create the COMPOSER_HOME directory (where the global packages will be in):
RUN mkdir -p $COMPOSER_HOME \
 && chgrp wheel $COMPOSER_HOME \
 && chmod g+rws $COMPOSER_HOME

# Step 13: Copy the rest of the application code

#COPY composer.* package.json package-lock.json /usr/src/
COPY composer.* package.json  /usr/src/


# step
RUN mkdir -p /usr/src/vendor /usr/src/node_modules

# Step 14: Install the project's PHP libraries running `composer install`.
# As we're running this as root, we added the `--no-plugins` and `--no-scripts`
# flags - see https://getcomposer.org/doc/faqs/how-to-install-untrusted-packages-safely.md
RUN php -d memory_limit=-1 /usr/local/bin/composer install \
    --ignore-platform-reqs \
    --no-autoloader \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

# Step 15: Install the 'check-dependencies' node package:
RUN npm install --legacy-peer-deps

# IV: Testing stage: ===========================================================
# In this stage we'll add the current code from the project's source, so we can
# run tests with the code.
# Step 16: Start off from the development stage image:
FROM development AS testing

COPY . /usr/src/

# IV: Builder stage: ===========================================================
# In this stage we'll compile assets coming from the project's source, remove
# development libraries, and other cleanup tasks, in preparation for the final
# "release" image:

# Step 17: Start off from the development stage image:
FROM testing AS builder

# Step 18: Precompile assets and remove compiled source code:
# RUN yarn production && rm -rf resources/js resources/sass

# Step 19: Remove installed composer libraries that belong to the development
# group - we'll copy the remaining composer libraries into the deployable image
# on the next stage - see https://laravel.com/docs/5.7/deployment#optimization.
# Notice that we're removing our 'composer' wrapper script, as we no longer need
# to switch from root user as we should during development time:
RUN rm -rf bin/composer \
 && mkdir -p bootstrap/cache \
 && /usr/local/bin/composer install --optimize-autoloader --no-dev \
 && npm run production


# RUN ["chmod", "+x", "bin/dev-entrypoint.sh"]

# Step 20: Remove files not used on release image:
RUN rm -rf \
    .config \
    .env.example \
    .npm \
    .npmrc \
    bin/dev-entrypoint.sh \
    node_modules \
    php.tar.* \
    tests \
    tmp/* \
    webpack.mix.js

# Step 21: Re-generate the temporary directories for pids and sockets:
RUN mkdir -p /usr/src/tmp/pids /usr/src/tmp/sockets

# V: Release stage: ============================================================
# In this stage, we build the final, deployable Docker image, which will be
# smaller than the images generated on previous stages:

# Step 22: Start off from the runtime stage image:
FROM runtime AS release

# Steps 23 & 28: Copy the previously-compiled PHP extensions & their
# configurations:
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/etc/php/conf.d /usr/local/etc/php/conf.d

# Step 24: Copy from app code from the "builder" stage, which at this point
# should have the assets (javascript & css) already compiled:
COPY --from=builder --chown=www-data:www-data /usr/src /usr/src

# Step 25: Set the APP_ENV and PORT default values:
ENV APP_ENV=local PORT=80 SENTRY_LARAVEL_DSN=https://d3c44e8da93449eca586f62af78b94b5@o189565.ingest.sentry.io/5287486


# step
ENTRYPOINT [ "/usr/src/bin/entrypoint.sh" ]

# Step 26: Define the image's default command:
CMD [ "web" ]

# Step 27: Step down to an unprivileged user:
# USER www-data