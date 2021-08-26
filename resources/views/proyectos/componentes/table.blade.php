<div class="row">
  <div class="col-lg-8 col-md-6 col-xs-12">
    <div class="panel panel-primary card-view panel-refresh">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-light">Lista de Proyectos</h6>
        </div>
        <div class="pull-right"> {{-- RUTA DEL ARCHIVO--}}
            @can('CRUD_Proyecto')
            <a class="pull-left btn btn-success btn-xs mr-15" data-toggle="modal" data-target="#Project_register">Nuevo Proyecto</a>
            @endcan
          <a href="#" class="pull-left inline-block refresh mr-15">
            <i class="zmdi zmdi-replay txt-light"></i>
          </a>
          <a href="#" class="pull-left inline-block full-screen mr-15">
            <i class="zmdi zmdi-fullscreen txt-light"></i>
          </a>
          <div class="pull-left inline-block dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
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
                    <th>Proyecto</th>
                    <th>Cliente</th>
                    <th>Area</th>
                    <th>Progreso</th>
                    <th>Presupuesto</th>
                    <th>Estado</th>
                    <th>Límite</th>
                    @can('CRUD_Proyecto')
                    <th>Editar / Eliminar</th>
                    @endcan
                    <th>Administrar tareas</th>
                  </tr>
                </thead>

                <tbody>

                  @foreach ($projects as $project)
                    @if ($project->final_date > $project->delivery_date)
                      <tr class="success">
                    @elseif ($project->final_date < $project->delivery_date)
                      <tr class="danger">
                    @elseif ($project->final_date == $project->delivery_date)
                      <tr class="warning">
                    @else
                      <tr>
                    @endif
                      <td>{{$project->name}}</td>
                      <td>{{$project->client->name}}</td>
                      <td>{{$project->areas->first()->name}}</td>
                      <td>
                          <div class="progress progress-xs mb-0 ">

                              @if ($project->tasks->count() == 0)
                              <div class="progress-bar progress-bar-success" style="width: 0%"></div>

                              @else
                              <div class="progress-bar progress-bar-success" style="width: {{$project->tasks->where('status_id',8)->count()*100/$project->tasks->count()}}%"></div>
                              @endif
                        </div>
                      </td>
                      <td>
                        <span class="txt-dark weight-500">S/. {{$project->amount}}</span>
                      </td>
                      <td>
                        <span class="label label-{{$project->status->color}}">{{$project->status->name}}</span>
                      </td>
                      <td>{{ \Carbon\Carbon::parse($project->final_date)->format('M d, Y')}}</td>
                      @can('CRUD_Proyecto')
                      <td>
                          <button type="button"  data-toggle="modal" data-target="#Project_update{{$project->id}}" class="btn btn-xs btn-warning icon-pencil"></button> <button type="button" class="btn btn-xs btn-danger icon-trash" data-toggle="modal" data-target="#Project-remove{{$project->id}}"></button>
                      </td>
                      @endcan
                      <td>
                        <button type="button"  data-toggle="modal" data-target="#Tareas{{$project->id}}" class="btn btn-xs btn-primary fa fa-eye"></button>
                        @include('proyectos.componentes.subcomponentes_tareas.modal_tareas_project')
                        @can('CRUD_Proyecto')
                        <a href="{{route('proyectos.show',$project->id)}}" class="btn btn-xs btn-info icon-note"></a>
                        @endcan
                        @can('CRUD_Proyecto')
                        <button type="button"  data-toggle="modal" data-target="#TareasRegister{{$project->id}}" class="btn btn-xs btn-success fa fa-plus-square"></button>
                        @endcan
                      </td>
                    </tr>

                      @include('proyectos.componentes.project_update_modal')
                      @include('proyectos.componentes.project_delete_modal')
                      @include('proyectos.componentes.subcomponentes_tareas.task_register_modal')

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

@include('proyectos.componentes.project_register_modal')
