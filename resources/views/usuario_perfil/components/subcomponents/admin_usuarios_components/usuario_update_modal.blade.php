<div class="modal fade" id="User_update{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuario.update',$usuario->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label class="control-label mb-10" for="exampleInputuname_1">Nombres</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="willard bryant" value="{{$usuario->name}}">
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_1">Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="email" placeholder="example@gmail.com" value="{{$usuario->email}}">
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_1">Telefono</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="phone" placeholder="963852741" value="{{$usuario->phone}}">
                    </div>
                    <div></div>
                    <div class="input-group">
                        <h6> Rol Asignado: </h6>
                        @foreach ($roles as $role)
                        <div>
                            @if ($usuario->roles()->first()->id == $role->id)
                                <input class="mr-2" type="radio" id="{{$role->id}}" name="roles[]" value="{{$role->id}}" checked>
                            @else
                                <input class="mr-2" type="radio" id="{{$role->id}}" name="roles[]" value="{{$role->id}}">
                            @endif
                            <label>{{$role->name}}</label>
                        </div>
                        @endforeach
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Actualizar Perfil</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
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

<script>
//CAMBIAR IMAGEN CUADNO SE SELECCIONE UNA FOTO
document.getElementById("fileUserActualizar{{$usuario->id}}").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureUserActualizar{{$usuario->id}}").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
