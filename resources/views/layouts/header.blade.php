<div class="navbar-fixed">
            <nav class="transparent black-text">
                <div class="nav-wrapper" style="z-index: 1;" >
                    <a href="{{ route('home') }}" class="brand-logo" style="padding-left: 60px; color: #ef5350;">
                        <img style="width: 130px; height: 45px; padding-top: 10px;" src="{{asset('/img/logo.svg') }}">
                    </a>
                    <a href="" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons">menu</i></a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down black-text">
                        <li ><a href="{{ url('/ai') }}" class="black-text">Self Care</a></li>
                        <li ><a href="{{ url('/solutions') }}" class="black-text">Solutions</a></li>
                        <li ><a href="" class="black-text">Recharge</a></li>
                        <li ><a href="" class="black-text">Feedback</a></li>
                        @if(Auth::guest())
                            <li ><a href="{{ route('login') }}" class="black-text">Login</a></li>
                            <li ><a href="{{ route('register') }}" class="black-text">Register</a></li>
                        @else
                            <ul id="dropdown1" class="dropdown-content">
                                <li>
                                    <div class="chip">
                                        <a href="" class="black-text">
                                        <img src="{{ asset('img/account.svg') }}" alt="Contact Person">
                                        {{ Auth::user()->name }}
                                        </a>
                                    </div>
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
                                <a class="dropdown-button black-text" href="#" data-activates="dropdown1">
                                    <div class="chip">
                                        <img src="{{ asset('img/account.svg') }}" alt="Contact Person">
                                        {{ Auth::user()->name }}
                                        </a>
                                    </div>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @endif
                    </ul>

                    <ul class="side-nav black-text" id="mobile-demo">
                        <li ><a href="{{ url('/ai') }}" class="black-text">Self Care</a></li>
                        <li ><a href="{{ url('/solutions') }}" class="black-text">Solutions</a></li>
                        <li ><a href="" class="black-text">Recharge</a></li>
                        <li ><a href="" class="black-text">Feedback</a></li>
                        @if(Auth::guest())
                            <li ><a href="{{ route('login') }}" class="black-text">Login</a></li>
                            <li ><a href="{{ route('register') }}" class="black-text">Register</a></li>
                        @else
                            <ul id="dropdown1" class="dropdown-content">
                                <li>
                                    <div class="chip">
                                        <a href="" class="black-text">
                                        <img src="{{ asset('img/account.svg') }}" alt="Contact Person">
                                        {{ Auth::user()->name }}
                                        </a>
                                    </div>
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
                                <a class="dropdown-button black-text" href="#" data-activates="dropdown1">
                                    <div class="chip">
                                        <img src="{{ asset('img/account.svg') }}" alt="Contact Person">
                                        {{ Auth::user()->name }}
                                        </a>
                                    </div>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @endif
                    </ul>
                    
          
                </div>
            </nav>
        </div>