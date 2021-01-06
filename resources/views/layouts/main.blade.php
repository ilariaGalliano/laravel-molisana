<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Molisana</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    </head>

    <body>
       
      <div id="pasta">
       
        @include('partials.header')

        <main>
            @yield('content')
        </main>
        

        @include('partials.footer')

      </div>

      <script src="{{ asset('js/app.js')}}"></script>

    </body>

</html>
