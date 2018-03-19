@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Cidades</h2>
	<div class="row">

		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.cidades')}}">Lista de Cidades</a></li>
		  <li><a href="#" class="active">Adicionar Cidade</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.cidades.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.cidades._form')

		<button class="btn btn-primary">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection