<div class="modal fade" id="NewUserModal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Crear Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.store')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="control-label" for="exampleInputuname_1">Nombres</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="willard bryant">
                    </div>
                    <label class="control-label" for="exampleInputuname_1">Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="email" placeholder="example@gmail.com">
                    </div>
                    <label class="control-label" for="exampleInputuname_1">Telefono</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="phone" placeholder="963852741">
                    </div>

                    <label class="control-label" for="exampleInputuname_1">Area</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="area_id" class="form-control" required>
                            @foreach ($areas as $area)
                            <option value="{{$area->id}}">{{$area->name}}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="input-group">
                        <h6> Rol Asignado: </h6>
                        <label>Practicante</label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Registrar</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Salir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    .image-wrapper{
        position:  relative;
        padding-bottom: 56.25%;
    }
    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
