<div class="page-wrapper">
  <div class="container-fluid pt-25">
      <!-- Row -->
      <div class="row">
          @yield('content')
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Editar datos del cliente</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="form-wrap">
                  <form action="{{route('clientes.update', $id)}}" method="POST">
                    @csrf

                    @method('put')
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Editar nombre del cliente</label>
                      <input type="text" name="name" class="form-control" value="{{$id->name}}" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Editar teléfono del cliente</label>
                      <input type="number" class="form-control" name="phone" value="{{$id->phone}}" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Editar email del cliente</label>
                      <input type="email" class="form-control" name="email" value="{{$id->email}}" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Editar estado del cliente</label>
                      <input type="number" class="form-control" name="status" value="{{$id->status}}" required>
                    </div>
                    <button type="submit" class="btn btn-success">
                      <span class="btn-text">Editar</span>
                    </button>

                    <a href="{{route('clientes')}}" class="btn  btn-danger">
                      <span class="btn-text">Cancelar</span>
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Footer -->
  @include('layout.footer')
  <!-- /Footer -->
</div>