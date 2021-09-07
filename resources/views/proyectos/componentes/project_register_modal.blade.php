<div class="modal fade" id="Project_register" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nuevo Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('proyecto.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Proyecto" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_2">Clientes:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <select class="form-control select2" name="client_id" id="client_id">
                                <option>Elegir cliente</option>
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_3">Monto del Contrato:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_3" name="amount" placeholder="Monto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_4">Fecha Inicial:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="date" class="form-control" id="exampleInputuname_4" name="start_date" value="<?php echo date("Y-m-d");?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_5">Fecha Final:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="date" class="form-control" id="exampleInputuname_5" name="final_date" value="<?php echo date("Y-m-d");?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_5">Areas: </label>
                        @foreach ($areas as $area)
                        <br>
                        <input type="checkbox" name="areas[]" id="{{$area->id}}" value="{{$area->id}}"> 
                        <label for="{{$area->id}}">{{$area->name}}</label>
                        @endforeach
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Registrar</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
