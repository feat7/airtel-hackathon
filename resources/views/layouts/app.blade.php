<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        
        @include('layouts.header')

        <div class="container">
            @yield('content')
        </div>
        
        @include('layouts.footer')

    </body>

</html>