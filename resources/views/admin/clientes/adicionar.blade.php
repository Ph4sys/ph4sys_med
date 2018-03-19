@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Cliente</h2>
	<div class="row">

		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.clientes')}}">Lista de Clientes</a></li>
		  <li><a class="active">Adicionar Cliente</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.clientes.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.clientes._form')

		<button class="btn btn-primary">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection