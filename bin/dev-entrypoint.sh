#! /bin/sh

# The Docker App Container's development entrypoint.
# This is a script used by the project's Docker development environment to
# setup the app containers and databases upon runnning.
set -e

: ${APP_PATH:="/usr/src"}
: ${APP_TEMP_PATH:="$APP_PATH/tmp"}
: ${APP_SETUP_LOCK:="$APP_TEMP_PATH/setup.lock"}
: ${APP_SETUP_WAIT:="5"}

# 1: Define the functions lock and unlock our app containers setup processes:
lock_setup() { mkdir -p $APP_TEMP_PATH && touch $APP_SETUP_LOCK; }
unlock_setup() { rm -rf $APP_SETUP_LOCK; }
wait_setup() { echo "Waiting for app setup to finish..."; sleep $APP_SETUP_WAIT; }

# 2: 'Unlock' the setup process if the script exits prematurely:
trap unlock_setup HUP INT QUIT KILL TERM EXIT

# 3: Specify a default command, in case it wasn't issued:
if [ -z "$1" ]; then set -- php artisan serve --host=0.0.0.0 --port=8000 "$@"; fi

if [ "$1" = "php" ] || [ "$1" = "artisan" ] || [ "$1" = "phpunit-watcher" ] || ([ "$1" = "yarn" ] && [ "$2" = "run" ])
then
  # 4: Wait until the setup 'lock' file no longer exists:
  while [ -f $APP_SETUP_LOCK ]; do wait_setup; done

  # 5: 'Lock' the setup process, to prevent a race condition when the project's
  # app containers will try to install gems and setup the database concurrently:
  lock_setup

  # restructuring files compsoer
  # /usr/local/bin/composer dumpautoload

  # 6: Check if the composer dependencies are met, or install
  php -d memory_limit=-1 /usr/local/bin/composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

  # clear vars config
  php artisan config:clear

  # clear cache
  php artisan cache:clear

  # 7: Check npm dependencies, or install:
  npm install

  # 8: Check if the database exists, or setup the database if it doesn't, as it
  # is the case when the project runs for the first time.
  #
  # We'll use a custom script `checkdb` (inside our app's `bin` folder), instead
  # of running `rails db:version` to avoid loading the entire rails app for this
  # simple check:

  # php artisan migrate

  # 9 ruun seed
  # php artisan db:seed

  # 10: 'Unlock' the setup process:
  unlock_setup
fi

# 11 run npm
# npm run production

# 12: Execute the given or default command:
exec "$@"