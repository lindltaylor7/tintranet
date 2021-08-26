@extends('layout.template')

@section('template_title')
    {{ $goal->name ?? 'Show Goal' }}
@endsection

@section('content')
   
    @include('goal.components.contentshow') 
@endsection
