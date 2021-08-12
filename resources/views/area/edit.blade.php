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
                      <h6 class="panel-title txt-dark">Editar departamento</h6>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                      <div class="form-wrap">
                        <form action="{{route('area.update', $id)}}" method="POST">
                          @csrf
                          @method('put')
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">Editar nombre de la Área</label>
                            <input type="text" name="name" class="form-control" value="{{$id->name}}" required>
                          </div>
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">Editar estado de la Área</label>
                            <input type="number" class="form-control" name="status" value="{{$id->status}}" required>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">Editar el departamento</label>
                            <select name="department" class="form-control" required>
                              @foreach ($department as $name)
                                @if ($name->id === $idDepartment->id) 
                                  <option value="{{$name->id}}" selected>{{$idDepartment->name}}</option>
                                @else
                                  <option value="{{$name->id}}">{{$name->name}}</option>
                                @endif
                              @endforeach
                            </select> 
                          </div>

                          <button type="submit" class="btn btn-success">
                            <span class="btn-text">Editar</span>
                          </button>

                          <a href="{{route('area')}}" class="btn  btn-danger">
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
