<div class="modal fade" id="Role_update{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Datos del Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('role.update',$role->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label class="control-label mb-10" for="exampleInputuname_1">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-book"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Rol" value="{{$role->name}}">
                    </div>
                    <div class="input-group">
                        <h2 class="h3">Lista de Permisos</h2>
                        @foreach ($permissions as $permission)
                            <div>
                                <input class="mr-2" type="checkbox" id="{{$permission->id}}" name="permissions[]" value="{{$permission->id}}"
                                @foreach ($role->permissions as $p)
                                    @if ($p->id == $permission->id)
                                        checked 
                                    @endif
                                @endforeach>
                                <label>{{$permission->name}}</label>
                            </div>
                        @endforeach

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Actualizar Rol</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
