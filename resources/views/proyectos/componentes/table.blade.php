<div class="row">
  <div class="col-lg-8 col-md-6 col-xs-12">
    <div class="panel panel-default card-view panel-refresh">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Lista de Proyectos</h6>
        </div>
        <div class="pull-right"> {{-- RUTA DEL ARCHIVO--}}
          <a class="pull-left btn btn-primary btn-xs mr-15" data-toggle="modal" data-target="#Project_register">Nuevo</a>
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
                    <th>Proyecto</th>
                    <th>Cliente</th>
                    <th>Progreso</th>
                    <th>Presupuesto</th>
                    <th>Estado</th>
                    <th>Límite</th>
                    <th>Editar / Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                    <tr>
                      <td>{{$project->name}}</td>
                      <td>{{$project->client->name}}</td>
                      <td>
                        <div class="progress progress-xs mb-0 ">
                          <div class="progress-bar progress-bar-success" style="width: {{100}}%"></div>
                        </div>
                      </td>
                      <td>
                        <span class="txt-dark weight-500">S/. {{$project->amount}}</span>
                      </td>
                      <td>
                        <span class="label label-primary">{{$project->status}}</span>
                      </td>
                      <td>{{ \Carbon\Carbon::parse($project->final_date)->format('M d, Y')}}</td>
                      <td>
                        <button type="button"  data-toggle="modal" data-target="#Project_update{{$project->id}}" class="btn btn-xs btn-warning icon-pencil"></button> <button type="button" class="btn btn-xs btn-danger icon-trash" data-toggle="modal" data-target="#Project-remove{{$project->id}}"></button>
                      </td>
                    </tr>
                    @include('proyectos.componentes.project_register_modal')
                    @include('proyectos.componentes.project_update')
                    @include('proyectos.componentes.project_delete')
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

