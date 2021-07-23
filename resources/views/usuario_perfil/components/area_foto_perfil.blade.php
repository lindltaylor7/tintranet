<div class="col-lg-3 col-xs-12">
    <div class="panel panel-default card-view  pa-0">
        <div class="panel-wrapper collapse in">
            <div class="panel-body  pa-0">
                <div class="profile-box">
                    <div class="profile-cover-pic">
                        <div class="fileupload btn btn-default">
                            <span class="btn-text">editar</span>
                            <input class="upload" type="file">
                        </div>
                        <div class="profile-image-overlay"></div>
                    </div>
                    <div class="profile-info text-center">

                        @if($users->files->isNotEmpty())
                        @foreach($users->files as $img)

                        <div class="profile-img-wrap">
                            <img class="inline-block mb-10" src="{{asset('storage/'.$img->url)}}"alt="user"/>
                            <div class="fileupload btn btn-default">
                                <span class="btn-text"  data-toggle="modal" data-target="#insert_foto">Foto</span>
                            </div>
                        </div>

                        @endforeach
                        @else
                        <img id="pictureUserUpdate"
                            src="https://revistabyte.es/wp-content/uploads/2016/01/Seguridad-TI-768x484.jpg.webp"
                            alt="" style="width: 150px; height: 150px; object-fit: cover;">

                        @endif


                        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-primary" >{{$users->name}}</h5>
                        <h6 class="block capitalize-font pb-20">Developer Geek</h6>
                    </div>
                    <div class="social-info">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <span class="counts block head-font"><span class="counter-anim">345</span></span>
                                <span class="counts-text block">post</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                <span class="counts-text block">followers</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <span class="counts block head-font"><span class="counter-anim">898</span></span>
                                <span class="counts-text block">tweets</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block  btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">editar perfil</span></button>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('usuario_perfil.components.subcomponents.modal_update_usuario')
@include('usuario_perfil.components.subcomponents.modal_register_foto_usuario')
