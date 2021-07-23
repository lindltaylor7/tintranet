<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Herramientas</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}"><div class="pull-left"><i class="fa fa-tachometer mr-20"></i><span class="right-nav-text">Inicio</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a class="{{ request()->routeIs('perfil') ? 'active' : '' }}" href="{{route('perfil',Auth::id())}}"><div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">Perfil</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
    </ul>
</div>
