@extends('layouts.app')

@section('content')
	<div class="container">

<section class="content-header">
	<h1>
		Painel de Controle
		<small>Principal</small>
	</h1>
	<ol class="bc breadcrumb">
		<li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
  		<li class="active"><a>Principal</a></li>
	</ol>
</section>
  	
<div class="content">
	
	<div class="col-md-12">
       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Menu - Acesso Rápido</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
         	<div class="col-sm-4">
				<div class="small-box bg-green">
		            <div class="inner">
		              <h3>Agenda<sup style="font-size: 20px"></sup></h3>

		              <p>&nbsp;</p>
		            </div>
		            <div class="icon">
		              <i class="fa fa-calendar"></i>
		            </div>
		            <a href="{{route('admin.pacientes.agendar')}}" class="small-box-footer">
		              Acessar <i class="fa fa-arrow-circle-right"></i>
		            </a>
          		</div>
         	</div>
       </div>
       <!-- /.box -->
		</div>
	</div>

</div>

  		

		<!--TAB-->
@endsection