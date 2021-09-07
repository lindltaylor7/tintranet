<div class="modal fade bs-example-modal-lg" id="Tareas{{$project->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="myLargeModalLabel">Tareas del proyecto {{$project->name}}</h5>
      </div>

      <div class="modal-body">
        <div class="table-responsive">
            <table id="datable_1" class="table  display table-hover border-none">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Final</th>
                  <th>Encargado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($tasks as $task)
                    @if ($task->delivery_date)
                      @if ($task->final_date > $task->delivery_date)
                        <tr class="success">
                      @elseif ($task->final_date < $task->delivery_date)
                        <tr class="danger">
                      @elseif ($task->final_date == $task->delivery_date)
                        <tr class="warning">
                      @endif
                    @else
                      <tr class="active">
                    @endif
                    <td>{{$task->name}}</td>
                    <td><span class="label label-{{$task->status->color}}">{{$task->status->name}}</span></td>
                    <td>{{$task->start_date}}</td>
                    <td>{{$task->final_date}}</td>
                    <td>{{$task->user->name}}</td>
                        @if ($task->user_id == Auth::id())
                            <td>
                              <form action="{{route('tarea.update',$task->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                  <select name="status_id" id="status_tarea" class="form-control">
                                      <option value="6">Cambiar estado</option>
                                    @foreach ($status as $s)
                                      <option value="{{$s->id}}" class="btn btn-{{$s->color}}" @if($task->status->id == $s->id) selected @endif>
                                        {{$s->name}}
                                      </option>
                                    @endforeach
                                  </select>
                                  
                                  <button type="submit" class="btn btn-xs btn-primary fa fa-spinner"></button>   
                              </form>                               
                            </td>
                            @else
                            <td>
                                <button class="btn btn-danger"disabled>Restringido</button>
                            </td>
                        @endif
                  </tr>

                  @endforeach
              </tbody>
            </table>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



