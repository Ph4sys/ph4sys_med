@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Paciente</h2>
	<div class="row">

		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.pacientes')}}">Lista de Pacientes</a></li>
		  <li><a class="active">Adicionar Paciente</a></li>
		</ol>
	</div>
	<div class="row">
		<form  action="{{ route('admin.pacientes.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.pacientes._form')

		<button class="btn btn-primary">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection