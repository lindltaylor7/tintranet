<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Herramientas</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        @can('Inicio')
            <li>
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}"><div class="pull-left"><i class="fas fa-home mr-20"></i><span class="right-nav-text">Inicio</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
            </li>
        @endcan
        @can('Perfil')
            <li>
                <a class="{{ request()->routeIs('perfil') ? 'active' : '' }}" href="{{route('perfil',Auth::id())}}"><div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">Perfil</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
            </li>
        @endcan
        @can('Departamentos')
            <li>
                <a class="{{ request()->routeIs('departamentos') ? 'active' : '' }}" href="{{route('departamentos')}}"><div class="pull-left"><i class="fas fa-building mr-20"></i><span class="right-nav-text">Departamentos</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
            </li>
        @endcan
        
        <li><hr class="light-grey-hr mb-10"/></li>
        @can('Roles')
            <li>
                <a class="{{ request()->routeIs('roles') ? 'active' : '' }}" href="{{route('roles')}}"><div class="pull-left"><i class="fas fa-address-card mr-20"></i><span class="right-nav-text">Roles</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
            </li>
        @endcan
    </ul>
</div>