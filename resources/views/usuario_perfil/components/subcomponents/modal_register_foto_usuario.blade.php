<div class="modal fade" id="insert_foto" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Subir imagen de usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuario.update',$users->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">

                        <div class="user_pro_img_area">

                            @if($users->files->isNotEmpty())
                            @foreach($users->files as $img)
                                <img id="pictureUser" src="{{asset('storage/'.$img->url)}}" alt=""
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            @endforeach
                            @else
                                <img id="pictureUser"
                                    src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp"
                                    alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif

                            <div class="custom-file-upload">
                                <input type="file" id="fileUser" name="fileUserUpdate">
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg btn-success">Actualizar</button>
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
document.getElementById("fileUser").addEventListener('change', cambiarImagen);
function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("pictureUser").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
