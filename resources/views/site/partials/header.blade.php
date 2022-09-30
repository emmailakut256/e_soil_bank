<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('frontend/images/PAAT-Logo-1.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                </div>
               <div class="col-lg-6 col-sm-7">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="" class="icontext">
                               
                                <div class="text-wrap">
                                    
                                </div>
                            </a>
                        </div>
                        @guest
                        <div class="widget-header">
                                <a href="{{ url('/') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-secondary round text-white"><i class="fa fa-home"></i></div>
                                    <div class="text-wrap" style="color: orange;"><span>Home </span></div>
                                </a>
                            </div>
                        <div class="widget-header">
                                <a href="{{ route('register') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-secondary round text-white"><i class="fa fa-book"></i></div>
                                    <div class="text-wrap" style="color: orange;"><span>Register </span></div>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="{{ route('login') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-secondary round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap" style="color: orange;"><span>Login </span></div>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="{{ url('/About_us') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-secondary round text-white"><i class="fa fa-address-card" style="font-size:24px"></i></div>
                                    <div class="text-wrap" style="color: orange;"><span>About us </span></div>
                                </a>
                            </div>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                       <strong> {{ Auth::user()->name }}</strong> <span class="caret"></span>
                                     </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       
                                       @if(auth::user()->Role==1)
                                       <a class="dropdown-item" href="usersc/{{auth::user()->id}}">profile</a>
                                        @else
                                        <a class="dropdown-item" href="users/{{auth::user()->id}}">profile</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li> 
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 
    @include('site.partials.nav') -->
</header>
