<div class="row">
    <div class="col-lg-8 col-md-6 col-xs-12">
      <div class="panel panel-default card-view panel-refresh">
        <div class="refresh-container">
          <div class="la-anim-1"></div>
        </div>
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Lista de Metas</h6>
          </div>
          <div class="pull-right"> {{-- RUTA DEL ARCHIVO--}}
              @can('Metas')
              <a class="pull-left btn btn-primary btn-xs mr-15" data-toggle="modal" data-target="#Goal_register">Nuevo</a>
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
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>N°</th>
                                
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>Fecha limite</th>
                                <th>Cantidad deseada</th>
                                <th>Unidad</th>
                                <th>Parcial</th>
                                <th>Area</th>

                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($goals as $goal)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    
                                    <td>{{ $goal->description }}</td>
                                    <td>{{ $goal->start_date }}</td>
                                    <td>{{ $goal->final_date }}</td>
                                    <td>{{ $goal->desired_quantity }}</td>
                                    <td>{{ $goal->unit_asigment }}</td>
                                    <td>{{ $goal->partial_quantity }}</td>
                                    <td>{{ $goal->area->name}}</td>

                                    <td>
                                        <form action="{{ route('goals.destroy',$goal->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('goals.show',$goal->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success"  data-toggle="modal" data-target="#Goal_update{{$goal->id}}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @include('goal.components.edit_goal_modal')
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
  
  @include('goal.components.register_goal_modal')
  
