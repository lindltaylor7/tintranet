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
                <h6 class="panel-title txt-dark">Registrar cliente</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="form-wrap">
                  <form action="{{route('clientes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Nombre</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Telefono</label>
                      <input type="number" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10 text-left">Estado</label>
                      <input type="number" class="form-control" name="status" required>
                    </div>
                    <button type="submit" class="btn btn-success">
                      <span class="btn-text">Guardar</span>
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