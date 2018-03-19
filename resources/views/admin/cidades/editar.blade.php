@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Cidades</h2>
	<div class="row">
		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.cidades')}}">Lista de Cidades</a></li>
		  <li><a class="active">Editar Cidade</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.cidades.atualizar', $registro->id) }}" method="post">

			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include('admin.cidades._form')
			<button class="btn btn-primary">Atualizar</button>

		</form>
			
	</div>
	
</div>
	

@endsection