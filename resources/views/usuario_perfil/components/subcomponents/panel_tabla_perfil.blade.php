<div  id="settings_8" class="tab-pane fade active in" role="tabpanel">
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                <form action="{{route('usuario.update',$users->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-body overflow-hide">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_01">Nombres</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" class="form-control" id="exampleInputuname_01" name="name" placeholder="Ingrese sus nombres" value="{{$users->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_01">Email </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                <input type="email" class="form-control" id="exampleInputEmail_01" name="email" placeholder="example@gmail.com" value="{{$users->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputContact_01">Telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                <input type="phone" class="form-control" id="exampleInputContact_01" name="phone" placeholder="+102 987654321" value="{{$users->phone}}">
                                            </div>
                                        </div>                                                                             
                                    </div>
                                    <div class="form-actions mt-10">
                                        <button type="submit" class="btn btn-success mr-10 mb-30">Acualizar Perfil</button>
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