<div class="modal fade" id="Project_update{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Datos del Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('proyecto.update',$project->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Proyecto" value="{{$project->name}}" required>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_2">Clientes:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <select class="form-control" name="client_id" id="client_id">
                            @foreach ($clients as $client)
                            <option value="{{$client->id}}" @if ($client->id == $project->client_id) selected @endif>{{$client->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_3">Monto del Contrato:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_3" name="amount" value="{{$project->amount}}" placeholder="Monto">
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_4">Fecha Inicial:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_4" name="start_date" value="{{$project->start_date}}" required>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_5">Fecha Final:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_5" name="final_date" value="{{$project->final_date}}" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Actualizar Datos</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
