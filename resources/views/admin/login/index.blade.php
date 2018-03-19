@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('admin.login') }}" method="post">
			{{ csrf_field() }}
			@include('admin.login._form')
			<!--<button type="submit" class="btn btn-primary">Enviar</button>-->
		</form>
	</div>
@endsection