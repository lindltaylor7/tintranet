<div class="modal fade" id="Task_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nuevo Proyecto</h5>
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
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Proyecto</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="project_id" id="status_tarea" class="form-control">   
                            @foreach ($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
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
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach                                                 
                        </select>
                        </div>
                    </div><!-- ends: .form-group -->    
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Status de tarea</label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <select name="status" id="status_tarea" class="form-control">
                            <option value="Inicializado">Inicializado</option>
                            <option value="En ejecucion">En ejecucion</option>
                            <option value="Completado">Completado</option>
                            <option value="Estancado">Estancado</option>                            >
                        </select>
                        </div>
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
