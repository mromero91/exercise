<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" /> --}}
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      />
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
      />
    <title>{{env('APP_NAME', '')}}</title>

    <style type="text/css" media="screen">
      .bg-current{
        background-color: #8db436;
      }

      .bg-gold-renato {
        background-color: #e69f2a;
      }

      .text-gold-renato {
        color: #e69f2a;
      }

      .text-current {
        color: #8db436;
      }

      .bg-green-renato {
        background-color: #8db436;
      }

      .text-green-renato {
        color: #8db436;
      }
    </style>
  </head>
  <body>
    @include('nav.landing')
    <main>
      <div class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
        >
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
          style='
            background-image: url("/img/logo-legend.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
          '
          >
          <span id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-green-renato"
            >
          </span>
        </div>
        <div class="container relative">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <p class="mt-4 text-lg text-white">
                  Enfocados en sacar a delante a niños y adolescentes con Cáncer que luchan día a día en NL
                </p>
                <h1 class="text-white font-semibold text-5xl mt-2">
                  Dorlan Renato
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div style="height: 70px;"
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          >
          <svg class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
            >
            <polygon class="text-white fill-current"
              points="2560 0 2560 100 0 100"
              >
            </polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-white -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">

            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                    >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Misión</h6>
                  <p class="mt-2 mb-4 text-gray-600 text-justify">
                    Estamos enfocados en ayudar a niños y adolescentes concáncer en México para contribuir 
                    a darles una mejorcalidad de vida así como a sus familias, a través del apoyoy 
                    seguimiento durante su tratamiento.
                  </p>
                </div>
              </div>
            </div>

            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Nosotros</h6>
                  <p class="mt-2 mb-4 text-gray-600 text-justify">
                    Somos una asociación sinfines de lucro, creada conamor por la familia de unguerrero 
                    incansable de Dios que luchó contra elCáncer, por ello estamoscomprometidos a 
                    trabajarcon el corazón para otrosluchadores de la vida, ocomo lo fue él.
                  </p>
                </div>
              </div>
            </div>

            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Visión</h6>
                  <p class="mt-2 mb-4 text-gray-600 text-justify">
                    Ser una organización referente a nivel nacional en lacontribución a las necesidades 
                    de los niños y adolescentescon cáncer, integrando un grupo de líderes en la materia 
                    y voluntarios.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap grid justify-items-end w-full"
            style="
              background-image: url('{{ asset('img/thanks-tara-winstead-white.jpg') }}');
              background-size: 100% 100%;
              background-position: center;
            "
            >
            <div class="w-full md:w-5/12 px-4">
              <div class="
                  relative
                  flex
                  flex-col
                  min-w-0
                  break-words
                  bg-white
                  w-full
                  mb-6
                  shadow-lg
                  rounded-lg
                  bg-current
                "
                >
                <img alt="Fundación Dorlan"
                  src="{{ asset('img/logo.jpeg') }}"
                  class="w-full align-middle rounded-t-lg"
                  />
                <blockquote class="relative p-8 mb-4">
                  <svg preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                    >
                    <polygon points="-30,95 583,95 583,65"
                      class="text-current fill-current"
                      >
                    </polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white text-center">
                    ¡Juntos lucharemos!
                  </h4>
                  <ul>
                    <li class="text-base text-white font-light leading-relaxed mt-4 mb-4 text-justify">
                      Apoyo a mas de 100 niños con Cáncer al año.
                    </li>
                    <li class="text-base text-white font-light leading-relaxed mt-4 mb-4 text-justify">
                      Posicionarnos entre las instituciones referentes de apoyo 
                      contra el Cáncer Infantil en Nuevo León.
                    </li>
                    <li class="text-base text-white font-light leading-relaxed mt-4 mb-4 text-justify">
                      Ser una Instituciónmodelo en el trabajo enequipo entre familias 
                      y fortalecimiento denuestros valores.
                    </li>
                  </ul>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="relative py-20">
        <div style="height: 80px;"
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          >
          <svg class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
            >
            <polygon class="text-white fill-current"
              points="2560 0 2560 100 0 100"
              >
            </polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full mt-4 mb-8">
              <h3 class="text-3xl font-semibold uppercase text-center">
                Actividades para recaudar fondos
              </h3>
            </div>
            <div class="w-full md:w-4/12 ml-auto mr-auto">
              <img class="max-w-full rounded-lg shadow-lg"
                alt="Actividades para recaudar fondos"
                src="{{ asset('img/evento-slp-mty.jpeg') }}"
                />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto">
              <div class="md:pr-12">
                <div class="
                    text-current
                    p-3
                    text-center
                    inline-flex
                    items-center
                    justify-center
                    w-16
                    h-16
                    mb-6
                    shadow-lg
                    rounded-full
                    bg-green-300
                  "
                  >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold uppercase">
                  Programa de padrinos:
                  <span>
                    2,000 corazones.
                  </span>
                </h3>
                <p class="mt-4 text-base leading-relaxed text-gray-600 text-justify">
                  Por medio de esta actividad buscamos agente de cambio que
                  puedan apoyar con un donativo desde $100 M.N mensuales, con
                  el fin de brindar apoyo en la lucha contra el Cáncer Infantil en
                  Nuevo León, de esta forma hacemos equipo al unir esfuerzos
                  para vencer la enfermedad.
                </p>
                <p class="mt-4 text-base leading-relaxed text-gray-600">
                  Con las aportaciones se ayuda mediante:
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span class="
                            text-xs
                            font-semibold
                            inline-block
                            py-1
                            px-2
                            uppercase
                            rounded-full
                            text-white
                            bg-current
                            mr-3
                          "
                          >
                          <i class="fas fa-fingerprint"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="text-gray-600 text-base">
                          Cubriendo gastos de estudios, medicamentos
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span class="
                          text-xs
                          font-semibold
                          inline-block
                          py-1
                          px-2
                          uppercase
                          rounded-full
                          text-white
                          bg-current
                          mr-3
                          "
                          >
                          <i class="fab fa-html5"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="text-gray-600 text-base">y tratamientos</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Nuestro Equipo</h2>
              <p class="text-lg leading-relaxed m-4 text-gray-600">
                
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-1/2 lg:mb-0 mb-12 px-4 text-right">
              <div class="px-6">
                <img alt="Brenda Viridiana Garcés Briones"
                  src="{{ asset('img/logo-transparente.png') }}"
                  class="shadow-lg rounded-full max-w-full mx-auto bg-green-renato"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Brenda Viridiana Garcés Briones</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Fundadora
                  </p>
                  <div class="mt-6">
                    <button class="bg-red-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      onclick="window.open('https://www.instagram.com/brendagarces/', '_blank');"
                      type="button"
                      >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-1/2 lg:mb-0 mb-12 px-4 text-left">
              <div class="px-6">
                <img alt="Reyna Esmeralda López Álvarez"
                  src="{{ asset('img/logo-transparente.png') }}"
                  class="shadow-lg rounded-full max-w-full mx-auto bg-green-renato"
                  style="max-width: 120px;"
                  />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Reyna Esmeralda López Álvarez</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Fundadora
                  </p>
                  <div class="mt-6">
                    <button class="bg-red-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      onclick="window.open('https://www.instagram.com/brendagarces/', '_blank');"
                      type="button"
                      >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-20 relative block bg-gold-renato">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
          >
          <svg class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
            >
            <polygon
              class="text-gold-renato fill-current"
              points="2560 0 2560 100 0 100"
              >
            </polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Nos apoyas ?</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-white">
                Puedes hacer donaciones
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-gold-renato">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Necesitas ayuda ? / Puedes ayudar?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                    sad
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="nombre"
                      >
                      Nombre
                    </label>
                    <input
                      type="text"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Nombre"
                      style="transition: all 0.15s ease 0s;"
                      />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="correo"
                      >
                      Correo
                    </label>
                    <input
                      type="email"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Correo"
                      style="transition: all 0.15s ease 0s;"
                      />
                  </div>
                  <div class="relative w-full mb-3">
                    <label for="message"
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      >
                      Mensaje
                    </label>
                    <textarea
                      rows="4"
                      cols="80"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Mensaje..."
                      >
                    </textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-green-renato text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s;"
                      >
                      Enviar Mensaje ....
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gold-renato pt-8 pb-6">
      <div style="height: 80px;"
        class="bottom-auto top-0s left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        >
        <svg class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
          >
          <polygon class="text-gold-renato fill-current"
            points="2560 0 2560 100 0 100"
            >
          </polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">¡Mantengámonos en contacto!</h4>
            <h5 class="text-lg mt-0 mb-2 text-white">
              Encuéntrenos en cualquiera de estas plataformas, respondemos de 1 a 2 días hábiles.
            </h5>
            <div class="mt-6">
              <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
                >
                <i class="flex fab fa-twitter"></i></button
                >
              <button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
                >
                <i class="flex fab fa-facebook-square"></i></button
                >
              <button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
                >
                <i class="flex fab fa-dribbble"></i></button
                >
              <button
                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
                >
                <i class="flex fab fa-github"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto hidden">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >
                  Useful Links
                </span>
                <ul class="list-unstyled">
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.creative-tim.com/presentation"
                      >About Us</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://blog.creative-tim.com"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.github.com/creativetimofficial"
                      >Github</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.creative-tim.com/bootstrap-themes/free"
                      >Free Products</a
                    >
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-4/12 px-4 hidden">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Other Resources</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                      >MIT License</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/terms"
                      >Terms &amp; Conditions</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/privacy"
                      >Privacy Policy</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/contact-us"
                      >Contact Us</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-white0" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-white font-semibold py-1">
              Copyright © 2021 Fundación Dorlan Renato
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>