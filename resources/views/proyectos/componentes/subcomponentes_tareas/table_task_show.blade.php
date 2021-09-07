<div class="row">
    <div class="col-lg-8 col-md-6 col-xs-12">
      <div class="panel panel-default card-view panel-refresh">
        <div class="refresh-container">
          <div class="la-anim-1"></div>
        </div>
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Mis tareas del Proyecto {{$project->name}}</h6>
          </div>
          <div class="pull-right"> {{-- RUTA DEL ARCHIVO--}}
            @can('CrearTarea')
              <a class="pull-left btn btn-primary btn-xs mr-15" data-toggle="modal" data-target="#Task_register">Nuevo</a>
            @endcan
            <a href="#" class="pull-left inline-block refresh mr-15">
              <i class="zmdi zmdi-replay"></i>
            </a>
            <a href="#" class="pull-left inline-block full-screen mr-15">
              <i class="zmdi zmdi-fullscreen"></i>
            </a>
            <div class="pull-left inline-block dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
              <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body row pa-0">
            <div class="table-wrap">
              <div class="table-responsive">
                <table id="datable_1" class="table  display table-hover border-none">
                    <thead>
                        <tr>
                            <th>Tarea</th>
                            <th>Encargado</th>
                            <th>Fecha_inicial</th>
                            <th>Fecha_final</th>
                            <th>Estado</th>
                            @can('EstadoTarea')
                              <th>Cambiar estado</th>
                            @endcan
                            @can('EditarTarea')
                              <th>Editar / Eliminar</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
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
                                <td>{{$task->user->name}}</td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->final_date}}</td>
                                <td>
                                  <span class="label label-{{$task->status->color}}">{{$task->status->name}}</span>
                                </td>
                                @can('EstadoTarea')
                                    @if ($task->user_id == Auth::id())
                                          <td>
                                             <form action="" class="form form-inline">
                                            <button type="button" class="btn btn-primary btn-outline" data-container="body" title="" tabindex="0" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" data-content="<button class='btn btn-success btn-sm btn-block'>Iniciado</button><button class='btn btn-danger btn-sm btn-block'>Cancelado</button>" data-original-title="Estados"> Cambiar estado </button>
                                             </form>
                                          </td>
                                    @else
                                           <td>
                                              <button class="btn btn-danger"disabled>Restringido</button>
                                          </td>
                                    @endif
                                  @endcan
                                @can('EditarTarea')
                                  <td>
                                      <button type="button"  data-toggle="modal" data-target="#Task_update{{$task->id}}" class="btn btn-xs btn-warning icon-pencil"></button> <button type="button" class="btn btn-xs btn-danger icon-trash" data-toggle="modal" data-target="#Task-remove{{$task->id}}"></button>
                                  </td>
                                @endcan
                            </tr>
                            @include('tarea.componentes.task_update_modal')
                             @include('tarea.componentes.task_delete_modal')
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('tarea.componentes.task_register_modal')
