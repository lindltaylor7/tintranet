<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Lista de Proyectos</h6>
                </div>
                <div class="pull-right">
                    <a href="#" class="pull-left inline-block full-screen mr-15">
                        <i class="zmdi zmdi-fullscreen"></i>
                    </a>
                    <div class="pull-left inline-block dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Update</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Edit</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body row pa-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr>
                                <th>Proyecto</th>
                                <th>Cliente</th>
                                <th>Progreso</th>
                                <th>Presupuesto</th>
                                <th>Estado</th>
                                <th>Límite</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->client->name}}</td>
                                    <td><div class="progress progress-xs mb-0 ">
                                      <div class="progress-bar progress-bar-success" style="width: {{100}}%"></div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="txt-dark weight-500">S/. {{$project->amount}}</span>
                                    </td>
                                    <td>
                                      @if ($project->status == "Próximo")
                                        <span class="label label-info">{{$project->status}}</span>
                                      @elseif ($project->status == "Pendiente")
                                        <span class="label label-danger">{{$project->status}}</span>
                                      @elseif ($project->status == "Entregado")
                                        <span class="label label-primary">{{$project->status}}</span>
                                      @elseif ($project->status == "Completo")
                                        <span class="label label-success">{{$project->status}}</span>
                                      @elseif ($project->status == "En Proceso")
                                        <span class="label label-warning">{{$project->status}}</span>
                                      @endif
              
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($project->final_date)->format('M d, Y')}}</td>
                                  
                                </tr>
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