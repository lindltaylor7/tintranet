@extends('layout.template')

@section('title', 'Inicio')

@section('content')
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
	@include('layout.index')
@endsection