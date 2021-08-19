<div class="row">
  <div class="col-lg-8 col-md-6 col-xs-12">
    <div class="panel panel-default card-view panel-refresh">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Lista de Tareas</h6>
        </div>
        <div class="pull-right">
          <a href="{{route('clientes.register')}}" class="pull-left btn btn-primary btn-xs mr-15">Nuevo</a>
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
                          <th>Nombre</th>
                          <th>Telefono</th>
                          <th>Email</th>
                          <th>Estado</th>
                          <th>Editar / Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($clients as $client)
                          <tr>
                              <td>{{$client->name}}</td>
                              <td>{{$client->phone}}</td>
                              <td>{{$client->email}}</td>
                              <td>{{$client->status}}</td>
                              <td>
                                <div class="datable_row">
                                  <span class="input-group-btn">
                                    <a href="{{route('clientes.edit', $client->id)}}" class="btn btn-success btn-anim">
                                      <i class="icon-rocket"></i><span class="btn-text">Editar</span>
                                    </a>
                                  </span> 
          
                                  <form action="{{route('clientes.destroy', $client->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-anim btn-delete">
                                      <i class="fas fa-trash"></i>
                                      <span class="btn-text">Eliminar</span>
                                    </button>
                                  </form>
                                </div>
                              </td>
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
