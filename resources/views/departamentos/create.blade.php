@extends('layout.template')

@section('title', 'Inicio')

@section('content')
  <!-- Preloader -->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!-- /Preloader -->
  <div class="wrapper  theme-1-active pimary-color-blue">
    <!-- Top Menu Items -->
    @include('layout.header')
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    @include('layout.sidebar')
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    @include('layout.rightbar')
    <!-- /Right Sidebar Menu -->

    <!-- Main Content -->
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
                      <h6 class="panel-title txt-dark">Crear departamento</h6>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                      <div class="form-wrap">
                        <form action="{{route('departamentos.store')}}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">Nombre de Departamento</label>
                            <input type="text" name="name" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">Estado de Departamento</label>
                            <input type="number" class="form-control" name="status" required>
                          </div>

                          <button type="submit" class="btn btn-success">
                            <span class="btn-text">Guardar</span>
                          </button>

                          <a href="{{route('departamentos')}}" class="btn  btn-danger">
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
    <!-- /Main Content -->

  </div>
  <!-- /#wrapper -->

@endsection
