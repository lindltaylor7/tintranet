<div  id="usuarios_8" class="tab-pane fade" role="tabpanel">

                <div class="col-md-12 pb-20">
                    <div class="atbd_saved_items_wrapper">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-list"></span>Todos los Usuarios</h4>
                                    <button type="button"  data-toggle="modal" data-target="#NewUserModal" class="btn btn-xs btn-success icon-user"></button>
                                    @include('usuario_perfil.components.subcomponents.admin_usuarios_components.usuario_register_modal')
                                </div>

                            </div>
                            <div class="atbdb_content_module_contents">
                                <div class="table table-hover table-responsive">
                                    @if ($usuarios->isEmpty())
                                    <div>No hay registro de Usuarios</div>
                                    @else
                                    <table id="usertable_1" class="table">
                                        <thead  class="text-center">
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Estado</th>
                                                <th>Area</th>
                                                <th>Rol</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usuario)
                                            @if($usuario->id != $users->id)
                                            <tr>

                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->phone}}</td>
                                                <td>@if ($usuario->status == '1')
                                                    <div class="atbd_listing_meta">
                                                        <button class="label label-success" type="button" data-toggle="modal" data-target="#Inactive_usuario{{$usuario->id}}" href="#">Activo</button>
                                                    </div>
                                                    @else
                                                    <div class="atbd_listing_meta">
                                                        <button class="label label-danger" type="button" data-toggle="modal" data-target="#Active_usuario{{$usuario->id}}" href="#">Inactivo</button>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>{{$usuario->area->name}}</td>
                                                <td>{{$usuario->roles->first()->name}}</td>
                                                <td>
                                                    <button type="button"  data-toggle="modal" data-target="#User_update{{$usuario->id}}" class="btn btn-xs btn-warning icon-pencil"></button> <button type="button" class="btn btn-xs btn-danger icon-trash" data-toggle="modal" data-target="#User-remove{{$usuario->id}}"></button>
                                                </td>
                                            </tr>
                                            @include('usuario_perfil.components.subcomponents.admin_usuarios_components.usuario_update_modal')
                                            @include('usuario_perfil.components.subcomponents.admin_usuarios_components.usuario_delete_modal')
                                            @include('usuario_perfil.components.subcomponents.admin_usuarios_components.inactive_modal')
                                            @include('usuario_perfil.components.subcomponents.admin_usuarios_components.active_modal')
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div><!-- ends: .atbdb_content_module_contents -->
                        </div>
                    </div><!--  ends: .atbd_saved_items_wrapper -->
                </div><!-- ends: .col-lg-12 -->

</div>
