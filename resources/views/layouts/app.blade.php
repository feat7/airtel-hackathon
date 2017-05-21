<html>
    <head>

    <style type="text/css">
      .material-icons.md-18 { font-size: 18px; }
      .material-icons.md-24 { font-size: 24px; }
      .material-icons.md-36 { font-size: 36px; }
      .material-icons.md-48 { font-size: 48px; }
    </style>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

      <title>
          @yield('title')
      </title>

    </head>
    
    <body style="font-family: 'Raleway', sans-serif;">
    <!--Import jQuery before materialize.js-->
    @include('layouts.header')
        
        @section('container')
        @show
            
        @include('layouts.footer')
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    </body>
</html>