@extends('layouts.app')

@section('content')
	
	<div class="container">
          
      	<!-- Content Header (Page header) 
	      <section class="content-header">
	        
	      </section> -->

		<div class="row">
		 	
		 	<h1>
				Cadastro
				<small>Lista de Estados</small>
			</h1>
			<!-- 
			<section class="content-header"> -->
				<ol class="bc breadcrumb">
				  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
				  <li class="active"><a >Lista de Estados</a></li>
				  <!--<li class="active">Top Navigation</li> -->
				</ol>
			<!-- </section> -->

		</div>
		
		<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabela de Estados</h3>
         	</div>	
            <!-- /.box-header -->
	            <div class="box-body">
	              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
	              	<div class="row">
	              		<div class="col-sm-6">			
	              		</div>
	              		<div class="col-sm-6"></div>
	              	</div
	              	><div class="row"><div class="col-sm-12">
	              	<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
		                <thead>
			                <tr role="row">
			                	<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
			                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Nome</th>
			                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Sigla</th>
			                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ação version: activate to sort column ascending">Ação</th>
			                </tr>
		                </thead>
		                <tbody>
		                	@foreach($registros as $registro)
							<tr role="row" class="odd">
								<td class="sorting_1">{{ $registro->id }}</td>
								<td>{{ $registro->nome }}</td>
								<td>{{ $registro->sigla }}</td>
									<td>
										<a class="fa-btn label label-success" href="{{route('admin.estados.editar', $registro->id)}}">Editar</a>
										<a class="fa-btn label label-danger" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.estados.deletar',$registro->id) }}' }">Deletar</a>

									</td>
							</tr>
							@endforeach
		            	</tbody>
		                <tfoot>
		                	
		                </tfoot>
	              </table>
	              	<!-- BOTAO ADICIONAR-->
	              	<div>
						<a class="btn btn-primary" href="{{route('admin.estados.adicionar')}}">Adicionar</a>
					</div>
					<!-- /.BOTAO ADICIONAR-->
	          	</div>
	      	</div>
		      		<div class="row">
		      			<div class="col-sm-5">
		    	  				<div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
			      		</div>
			      		<div class="col-sm-7">
				      			<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
				      				{!! $registros->links() !!}
				      			</div>
			      		</div>
		      		</div>
	      		</div>
           </div>
            <!-- /.box-body -->
      	</div>
          <!-- /.box -->
    </div>
</div>
@endsection