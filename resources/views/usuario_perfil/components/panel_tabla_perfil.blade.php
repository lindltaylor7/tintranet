<div class="col-lg-9 col-xs-12">
    <div class="panel panel-default card-view pa-0">
        <div class="panel-wrapper collapse in">
            <div  class="panel-body pb-0">
                <div  class="tab-struct custom-tab-1">
                    <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                        <li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Perfiles</span></a></li>
                        <li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Seguidores<span class="inline-block">(246)</span></span></a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="photos_tab_8" role="tab" href="#photos_8" aria-expanded="false"><span>Fotos</span></a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="earning_tab_8" role="tab" href="#earnings_8" aria-expanded="false"><span>Ganancias</span></a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Cuenta</span></a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="usuarios_tab_8" role="tab" href="#usuarios_8" aria-expanded="false"><span>Usuarios</span></a></li>
                        <li class="dropdown" role="presentation">
                            <a  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false"><span>Mas</span> <span class="caret"></span></a>
                            <ul id="myTabDrop_7_contents"  class="dropdown-menu">
                                <li class=""><a  data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true">Acerca</a></li>
                                <li class=""><a  data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false">Seguir</a></li>
                                <li class=""><a  data-toggle="tab" id="dropdown_15_tab" role="tab" href="#dropdown_15" aria-expanded="false">Likes</a></li>
                                <li class=""><a  data-toggle="tab" id="dropdown_16_tab" role="tab" href="#dropdown_16" aria-expanded="false">Reviews</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent_8">
                        @include('usuario_perfil.components.subcomponents.panel_tabla_perfiles')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_seguidores')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_fotos')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_ganancias')                      
                        @include('usuario_perfil.components.subcomponents.panel_tabla_perfil')
                        @include('usuario_perfil.components.subcomponents.panel_tabla_usuarios')
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>