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
        @can('Areas')
        <li>
            <a class="{{ request()->routeIs('area') ? 'active' : '' }}" href="{{route('area')}}"><div class="pull-left"><i class="fas fa-layer-group mr-20"></i></i><span class="right-nav-text">Áreas</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        @endcan
        <li><hr class="light-grey-hr mb-10"/></li>
        @can('Proyectos')
        <li>
            <a class="{{ request()->routeIs('proyectos') ? 'active' : '' }}" href="{{route('proyectos')}}"><div class="pull-left"><i class="fas fa-clipboard-list mr-20"></i></i><span class="right-nav-text">Proyectos</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        @endcan
        @can('Tareas')
        <li>
            <a class="{{ request()->routeIs('tareas') ? 'active' : '' }}" href="{{route('tareas')}}"><div class="pull-left"><i class="fas fa-tasks mr-20"></i></i><span class="right-nav-text">Tareas</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        @endcan
        <li><hr class="light-grey-hr mb-10"/></li>
        @can('Roles')
        <li>
            <a class="{{ request()->routeIs('roles') ? 'active' : '' }}" href="{{route('roles')}}"><div class="pull-left"><i class="fas fa-address-card mr-20"></i><span class="right-nav-text">Roles</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        @endcan
        @can('Clientes')
        <li>
            <a class="{{ request()->routeIs('clientes') ? 'active' : '' }}" href="{{route('clientes')}}"><div class="pull-left"><i class="fas fa-id-card-alt mr-20"></i><span class="right-nav-text">Clientes</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        @endcan
    </ul>
</div>
