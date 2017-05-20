<html>
    @include('layouts.header')
    <body style="font-family: 'Raleway', sans-serif;">
    <!--Import jQuery before materialize.js-->
        <div class="navbar-fixed">
            <nav class="transparent black-text">
                <div class="nav-wrapper" style="z-index: 1;" >
                    <a href="#" class="brand-logo" style="padding-left: 60px; color: #ef5350;">
                        <img style="width: 130px; height: 45px; padding-top: 10px;" src="{{asset('/img/logo.svg') }}">
                    </a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down black-text">
                        <li ><a href="" class="black-text">Self Care</a></li>
                        <li ><a href="" class="black-text">Solutions</a></li>
                        <li ><a href="" class="black-text">Recharge</a></li>
                        <li ><a href="" class="black-text">Feedback</a></li>
                        @if(Auth::guest())
                            <li ><a href="{{ route('login') }}" class="black-text">Login</a></li>
                            <li ><a href="{{ route('register') }}" class="black-text">Register</a></li>
                        @else
                            <ul id="dropdown1" class="dropdown-content">
                                <li>
                                    <a href="" class="black-text">{{ Auth::user()->name }}</a>
                                </li>
                                <li>
                                    <a class="black-text" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                            <li>
                                <a class="dropdown-button" href="#" data-activates="dropdown1">
                                    <div class="black-text">{{ Auth::user()->name }}</div>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    <br><br>
        
        @section('container')
        @show
            
        @include('layouts.footer')
    </body>
</html>