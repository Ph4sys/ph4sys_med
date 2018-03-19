@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Usuário</h2>
	<div class="row">

		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.usuarios')}}">Lista de Usuários</a></li>
		  <li><a href="#" class="active">Adicionar Usuário</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.usuarios.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.usuarios._form')

		<button class="btn btn-primary">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection