@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Classes</h2>
	<div class="row">

		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.classes')}}">Lista de Classes</a></li>
		  <li><a href="#" class="active">Adicionar Classe</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.classes.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.classes._form')

		<button class="btn btn-primary">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection