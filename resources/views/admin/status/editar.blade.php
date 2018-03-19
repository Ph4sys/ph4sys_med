@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Status</h2>
	<div class="row">
		<ol class="bc breadcrumb">
		  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
		  <li><a href="{{route('admin.status')}}">Lista de Status</a></li>
		  <li><a class="active">Editar Status</a></li>
		</ol>
	</div>
	<div class="row">
		<form action="{{ route('admin.status.atualizar', $registro->id) }}" method="post">

			{{csrf_field()}}
			<input type="hidden" name="_method" value="put">
			@include('admin.status._form')
			<button class="btn btn-primary">Atualizar</button>

		</form>
			
	</div>
	
</div>
	

@endsection