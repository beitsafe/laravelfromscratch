<div class="nav-container">
    <div>
        <div class="bar bg--dark bar--sm visible-sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-2">
                        <a href="{{ asset('/') }}"> <img class="logo logo-dark" alt="logo" src="{{ asset('img/logo-dark.png') }}"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                    </div>
                    <div class="col-xs-9 col-sm-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu3;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="bar bar--sm bg--dark" id="menu3">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 hidden-xs hidden-sm">
                        <div class="bar__module">
                            <a href="{{ asset('/') }}"> <img class="logo logo-dark" alt="logo" src="{{ asset('img/logo-dark.png') }}"> <img class="logo logo-light" alt="logo" src="{{asset ('img/logo-light.png') }}"> </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-push-2">
                        <div class="bar__module">
                            <form> <input type="search" placeholder="Search site" name="query"> </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-pull-4">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li> <a href="#">
                                        Single
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 text-right text-left-xs">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li> <a href="#">
                                        Single
                                    </a> </li>
                                <li class="dropdown"> <span class="dropdown__trigger">
                                        Dropdown Slim
                                    </span>
                                    <div class="dropdown__container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="dropdown__content col-md-2">
                                                    <ul class="menu-vertical">
                                                        <li> <a href="#">Single Link</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bar__module">
                            @if (Auth::guest())
                                <a class="btn btn--primary btn--sm type--uppercase" href="{{ asset('/admin/create') }}"> <span class="btn__text">
                                    LOGIN
                                </span> </a>
                            @else
                                <li class="">
                                    <ul class="btn btn--secondary btn--lg">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ Auth::user()->name }} Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>