<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <form action="{{route('usuario.update',$users->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
        <div class="modal-content">
           
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myModalLabel">Editar Perfil</h5>
            </div>
            <div class="modal-body">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                            <form action="#">
                                                <div class="form-body overflow-hide">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputuname_1">Nombres</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                            <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="willard bryant" value="{{$users->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputEmail_1">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                            <input type="email" class="form-control" id="exampleInputEmail_1" name="email" placeholder="example@gmail.com" value="{{$users->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputContact_1">Telefono</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                            <input type="phone" class="form-control" id="exampleInputContact_1" name="phone" placeholder="+102 987654321" value="{{$users->phone}}">
                                                        </div>
                                                    </div>                                                                                                         
                                                    <div class="form-group">                        
                                                            <div class="user_pro_img_area">
                                                                @if($users->files->isNotEmpty())
                                                                @foreach($users->files as $img)                                        
                                                                    <img id="pictureUserUpdate" src="{{asset('storage/'.$img->url)}}" alt=""
                                                                        style="width: 150px; height: 150px; object-fit: cover;">
                                                                @endforeach
                                                                @else
                                                                    <img id="pictureUserUpdate"
                                                                        src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp"
                                                                        alt="" style="width: 150px; height: 150px; object-fit: cover;">
                                                                @endif                                        
                                                                <div class="custom-file-upload">
                                                                    <input type="file" id="fileUserUpdate" name="fileUserUpdate">
                                                                    <label for="fileUserUpdate" class="btn btn-sm btn-secondary mt-3">Subir Imagen</label>
                                                                </div>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Pais</label>
                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="Category 1">USA</option>
                                                            <option value="Category 2">Austrailia</option>
                                                            <option value="Category 3">India</option>
                                                            <option value="Category 4">UK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-actions mt-10">
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success waves-effect">Actualizar Perfil</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
            </div>
           
        </div>
        <!-- /.modal-content -->
    </form>
        
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    //CAMBIAR IMAGEN CUADNO SE SELECCIONE UNA FOTO
    document.getElementById("fileUserUpdate").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("pictureUserUpdate").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
    </script>
    