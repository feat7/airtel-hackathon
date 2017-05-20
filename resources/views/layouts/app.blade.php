<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      
    </head>
    
    <body style="font-family: 'Raleway', sans-serif;">
    <!--Import jQuery before materialize.js-->
    @include('layouts.header')
    <br><br>
        
        @section('container')
        @show
            
        @include('layouts.footer')
    </body>
</html>