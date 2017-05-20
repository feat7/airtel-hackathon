<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="{{ asset("/css/materialize.min.css") }}" rel="stylesheet" media="screen,projection" type="text/css">
        <link href="{{ asset("/css/animate.css") }}" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="css/animate.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      
    </head>

    <body style="font-family: 'Raleway', sans-serif;">
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="{{ asset("/js/materialize.min.js") }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
            });
        </script>
      
        @include('layouts.header')
        
        <br><br>
        
        @section('container')
        @show
            
        @include('layouts.footer')
    </body>
</html>