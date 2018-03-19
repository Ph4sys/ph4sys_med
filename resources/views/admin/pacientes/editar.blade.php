@extends('layouts.app')

@section('content')
<div class="container">
<section class="content-header">
	<h1>
		Editar
		<small>Paciente</small>
	</h1>
	<ol class="bc breadcrumb">
		<li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
  		<li><a href="{{ route('admin.pacientes')}}"></i> Pacientes</a></li>
  		<li class="active"><a>Editar</a></li>
	</ol>
</section>
	<div class="row">
		<form action="{{ route('admin.pacientes.atualizar', $registro->id) }}" method="post">

			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include('admin.pacientes._form')

			<button class="btn btn-primary">Atualizar</button>

		</form>
			
	</div>
	
</div>
	

@endsection