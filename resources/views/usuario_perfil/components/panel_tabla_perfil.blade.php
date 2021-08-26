<div class="col-lg-9 col-xs-12">
    <div class="panel panel-default card-view pa-0">
        <div class="panel-wrapper collapse in">
            <div  class="panel-body pb-0">
                <div  class="tab-struct custom-tab-1">
                    <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                        <li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Perfiles</span></a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Cuenta</span></a></li>
                        @can ('Usuarios')
                            <li role="presentation" class=""><a  data-toggle="tab" id="usuarios_tab_8" role="tab" href="#usuarios_8" aria-expanded="false"><span>Usuarios</span></a></li>
                        @endcan

                    </ul>
                    <div class="tab-content" id="myTabContent_8">
                        @include('usuario_perfil.components.subcomponents.panel_tabla_perfiles')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_perfil')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_usuarios')

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
