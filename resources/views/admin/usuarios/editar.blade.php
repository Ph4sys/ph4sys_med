@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Usuário</h2>
	<div class="row">
		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.usuarios')}}">Lista de Usuários</a></li>
		  <li><a class="active">Editar Usuário</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.usuarios.atualizar', $usuario->id) }}" method="post">

		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		@include('admin.usuarios._form')

		<button class="btn btn-primary">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection