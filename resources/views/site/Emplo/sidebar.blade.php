<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
 <div class="w3-container w3-row">
  <div class="w3-col s12 w3-center">
   <img class="w3-circle w3-margin-right" style="width:100px" src="{{ asset('frontend/images/avatar3.png') }}">
 </div>
 <div class="w3-col s12 w3-bar w3-center">
   
  <p class="app-menu__label" style="color: white;" >
  
   <span class="caret"></span> </p>
  <span class="app-menu__label" style="color: white;">{{ Auth::user()->name }}</span>
     <!--  <a href="#" class="w3-bar-item w3-button " style="width:33%"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button" style="width:33%"><i class="fa fa-user"></i></a>
      <a href= --><!-- !-- php" class="w3-bar-item w3-button" style="width:33%"><i class="fa fa-power-off"></i></a> --> 
    </div>
  </div>
  
  <ul class="app-menu">
    <li>
      <a class="app-menu__item {{ Route::currentRouteName() == 'site.dashboard' ? 'active' : '' }}" href="/Dashboard">
        <i class="app-menu__icon  fa fa-address-card-o"></i>
        <span class="app-menu__label">&nbsp;&nbsp;DASHBOARD</span>
      </a>
    </li>

  
    <!-- <li> -->
           <!--  <div class="app-menu__item" onclick="openAccordionsView('AccordionsView')">
                    <i class="fa fa-eye fa-fw"></i> <span class="app-menu__label">Derive Metrics</span> 
                  </div>
              <div id="AccordionsView" class="w3-hide w3-white w3-card-4">
                <a href="" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Project </a>
                <a href="" class="w3-bar-item w3-button w3-padding  "><i class="fa fa-users fa-fw"></i>  Business </a>
                <a href=" " class="w3-bar-item w3-button w3-padding   "><i class="fa fa-users fa-fw"></i>  Team </a>
                <a href="" class="w3-bar-item w3-button w3-padding  "><i class="fa fa-users fa-fw"></i>  Product </a>
                <a href="" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Resources </a> 

              </div> -->
              <!-- </li> -->
              <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-globe" aria-hidden="true"></i> <span class="app-menu__label">&nbsp;&nbsp;&nbsp;SOIL SAMPLE&nbsp;</span><i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              <li>
                <a class="dropdown-item" href=" {{route('site.Land.index')}} "><i class="fa fa-eye"></i>&nbsp;&nbsp; VIEW SOIL SAMPLE</a>
              </li>
              <li>
                <a class="dropdown-item" href=" {{route('site.Land.create')}} "><i class="fa fa-shopping-bag fa-lg"></i> &nbsp;&nbsp;&nbsp; ADD SOIL SAMPLE</a>
              </li>
            
            
            </ul>
          </li>

    <li class="dropdown">
      <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-tachometer"></i> <span class="app-menu__label">&nbsp;&nbsp;&nbsp;COPOUN&nbsp;</span><i class="fa fa-caret-down"></i> </a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
      <li>
          <a class="dropdown-item" href=" {{route('site.Vouncher.index')}} "><i class="fa fa-eye"></i>&nbsp;&nbsp; VIEW COPOUN</a>
        </li>
        <li>
          <a class="dropdown-item" href="{{route('site.Token.index')}}"><i class="fa fa-qrcode fa-lg"></i>&nbsp;&nbsp; COPOUN CATEGORY</a>
        </li>
        <li>
          <a class="dropdown-item" href="{{route('site.Vouncher.create')}}"><i class="fa fa-shopping-bag fa-lg"></i>&nbsp;&nbsp; GENERATE COPOUN</a>
        </li>
      </ul>
    </li>
    <li class="dropdown">
      <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="app-menu__label">&nbsp;&nbsp;CLIENTS&nbsp;</span><i class="fa fa-caret-down"></i> </a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li>
          <a class="dropdown-item" href=" {{route('site.Employees.index')}} "><i class="fa fa-eye"></i>&nbsp;&nbsp; VIEW CLIENTS</a>
        </li>
        <li>
          <a class="dropdown-item" href=" {{route('site.Employees.create')}} "><i class="fa fa-shopping-bag fa-lg"></i> &nbsp;&nbsp;ADD CLIENTS</a>
        </li>
       
       
      </ul>
    </li>

              <li>
                <a class="app-menu__item {{ Route::currentRouteName() == 'site.Farmer.index' ? 'active' : '' }}" href="{{route('site.Farmer.index')}}">
                  <i class="app-menu__icon fa fa-users"></i>
                  <span class="app-menu__label">&nbsp;&nbsp;FARMERS</span>
                </a>
              </li>

              <li class="dropdown">
      <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-tachometer"></i> <span class="app-menu__label">&nbsp;&nbsp;&nbsp;&nbsp;EMPLOYEES&nbsp;</span><i class="fa fa-caret-down"></i> </a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li>
          <a class="dropdown-item" href=" {{route('site.Employees.index')}} "><i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp; VIEW EMPLOYEES</a>
        </li>
        <li>
          <a class="dropdown-item" href=" {{route('site.Employees.create')}} "><i class="fa fa-shopping-bag fa-lg"></i>&nbsp;&nbsp; ADD EMPLOYEES</a>
        </li>
       
       
      </ul>
    </li>
              
              <li>
                <!-- <a class="app-menu__item {{ Route::currentRouteName() == 'site.settings' ? 'active' : '' }}" href="">
                  <i class="app-menu__icon fa fa-cogs"></i>
                  <span class="app-menu__label">LOGOUT</span>
                </a> -->
                <li class="dropdown">
      <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-tachometer"></i> <span class="app-menu__label">&nbsp;&nbsp;&nbsp;PROFILE&nbsp;</span><i class="fa fa-caret-down"></i> </a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li>
          <a class="dropdown-item" href="{{url('/profiles')}}"><i class="fa fa-qrcode fa-lg"></i> &nbsp;&nbsp;EDIT PROFILE</a>
        </li>
        <li>
          <a class="dropdown-item" href="{{route('user.change_password')}}"><i class="fa fa-shopping-bag fa-lg"></i>&nbsp;&nbsp; CHANGE PASSWORD</a>
      </li>
        <!-- <li>
          <a class="dropdown-item" href=""><i class="fa fa-group fa-lg"></i> Team</a>
        </li>
        <li>
          <a class="dropdown-item" href=""><i class="fa fa-cog fa-lg"></i> Product</a>
        </li>
        <li>
          <a class="dropdown-item" href=""><i class="fa fa-globe fa-lg"></i> Resources</a>
        </li> -->
      </ul>
    </li>
                <a class="app-menu__item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user fa-lg"></i>
                                            <span class="app-menu__label">&nbsp;&nbsp;&nbsp;LOGOUT</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
              </li>
            </ul>
          </aside>
