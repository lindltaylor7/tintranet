<div class="modal fade" id="Task_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nueva Tarea del Proyecto: {{$project->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tarea.register')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Nombre de Tarea</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="icon-user"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre de la tarea">
                        </div>
                    </div>
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Encargado de tarea</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="user_id" id="status_tarea" class="form-control">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div><!-- ends: .form-group -->
                    <label class="control-label mb-10" for="exampleInputuname_4">Fecha Inicial:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_4" name="start_date" value="<?php echo date("Y-m-d");?>" required>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_5">Fecha Final:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_5" name="final_date" required>
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
