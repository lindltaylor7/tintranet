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
    @include('clientes.componentes.client_register')
    <!-- /Main Content -->

  </div>
  <!-- /#wrapper -->

@endsection
