<div class="modal fade" id="Task_update{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tarea.update',$task->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Nombre de Tarea</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="icon-user"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre de la tarea" value="{{$task->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Proyecto</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="project_id" id="status_tarea" class="form-control">
                            @foreach ($projects as $project)
                             @if ($project->id === $task->project->id)
                            <option value="{{$project->id}}" selected>{{$project->name}}</option>
                             @else
                            <option value="{{$project->id}}">{{$project->name}}</option>
                             @endif
                             @endforeach
                        </select>
                        </div>
                    </div><!-- ends: .form-group -->
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Encargado de tarea</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="user_id" id="status_tarea" class="form-control">
                            @foreach ($users as $user)
                            @if ($user->id === $task->user->id)
                           <option value="{{$user->id}}" selected>{{$user->name}}</option>
                            @else
                           <option value="{{$user->id}}">{{$user->name}}</option>
                            @endif
                            @endforeach
                        </select>
                        </div>
                    </div><!-- ends: .form-group -->
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Status de tarea</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="status_id" id="status_tarea" class="form-control">
                            <option value="6">Pendiente</option>
                            <option value="7">En ejecucion</option>
                            <option value="8">Completado</option>
                            <option value="9">Estancado</option>
                        </select>
                        </div>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_4">Fecha Inicial:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_4" name="start_date" value="{{$task->start_date}}" required>
                    </div>
                    <label class="control-label mb-10" for="exampleInputuname_5">Fecha Final:</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                        <input type="date" class="form-control" id="exampleInputuname_5" name="final_date" value="{{$task->final_date}}"required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Guardar Cambios</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
