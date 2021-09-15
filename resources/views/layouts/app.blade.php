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
    {{--  <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
      />  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <div id="main">
      @include('nav.landing')
      <main class="">
        @yield('content')
      </main>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
  