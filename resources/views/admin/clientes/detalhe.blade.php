@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="row">
	 	<h1>
			Clientes
			<small>Detalhes</small>
		</h1>
			<!-- 
		<section class="content-header"> -->
			<ol class="bc breadcrumb">
			  <li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
			  <li><a href="{{ route('admin.clientes')}}"></i> Clientes</a></li>
			  <li class="active"><a>Detalhe</a></li>
			  <!--<li class="active">Top Navigation</li> -->
			</ol>
		<!-- </section> -->
		</div>
  	<div class="col-xs-12">
  		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">Dados Cliente</h3>
				</div>	
			<!-- /.box-header -->
			    <div class="box-body">
			      	<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
			          	<div class="row">
			          		<div class="col-sm-6">			
			          		</div>
			          		<div class="col-sm-6"></div>
			          	</div>

			      		<div class="row">
			      			<div class="col-sm-5">
			      				<b>Cliente: </b>{{ $cliente->nome}}
		      				</div>
				          	<div class="col-sm-3">
				          		<b>Classe: </b>{{ $cliente->classe->classe}}
				          	</div>
				          	<div class="col-sm-4">
				          		<b>Situação: </b>{{ $cliente->situacao->situacao}}
				          	</div>
				          	<div class="col-sm-5">
				          		<b>Endereço: </b>{{ $cliente->endereco }}
				          	</div>
				          	<div class="col-sm-3">
				          		<b>Bairro: </b>{{ $cliente->bairro->nome}}
				          	</div>
				          	<div class="col-sm-3">
				          		<b>Cidade: </b>{{ $cliente->cidade->nome}}-{{ $cliente->estado->sigla}}
				          	</div>
			  			</div>
			  	
			      		<div class="row">
			      			<div class="col-sm-5">
		    	  				<div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
					   		</div>
				      		<div class="col-sm-7"></div>
				   		</div>
			  		</div>
			</div>
		<!-- /.box-body -->
		</div>
  	</div>
  	<div class="col-xs-12">
  		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Contatos</h3>
            	<div class="box-tools pull-right">
	            	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	            	<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          		</div>
         	</div>
	        
	        <div class="box-body">

	        	<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
	              	<div class="row">
	              		<div class="col-sm-6">			
	              		</div>
	              		<div class="col-sm-6"></div>
	              	</div>

			        <div class="row">
		              	
		              	<div class="col-sm-12">

				          	<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				                <thead>
					                <tr role="row">
					                	<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Nome</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">E-mail</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Telefone</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Celular</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ação version: activate to sort column ascending">Ação</th>
					                </tr>
				                </thead>
				                <tbody>
				                	@foreach($cliente->contatos as $contato)
									<tr role="row" class="odd">
										<td class="sorting_1">{{ $contato->id }}</td>
										<td>{{ $contato->nome }}</td>
										<td>{{ $contato->email }}</td>
										<td>{{ $contato->telefone }}</td>
										<td>{{ $contato->celular }}</td>
										<td>
											<a class="fa-btn label label-success" href="{{route('admin.contatos.editar',$contato->id)}}">Editar</a>
											<a class="fa-btn label label-info" href="{{route('admin.hcontatos',$contato->id)}}">Histórico Contatos</a>
											<a class="fa-btn label label-danger" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{route('admin.contatos.deletar',$contato->id)}}' }">Deletar</a>
										</td>
									</tr>
									@endforeach
				            	</tbody>
				            	<tfoot>      		
					            </tfoot>
								<!-- /.BOTAO ADICIONAR-->
					        </table>
						    <div>
								<a class="btn btn-primary" href="{{route('admin.contatos.adicionar',$cliente->id)}}">Adicionar Contato</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
  		</div>
	</div>

	<div class="col-xs-12">
  		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Transportadora</h3>
              	<div class="box-tools pull-right">
	            	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	            	<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          		</div>
         	</div>
	        
	        <div class="box-body">

	        	<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
	              	<div class="row">
	              		<div class="col-sm-6">			
	              		</div>
	              		<div class="col-sm-6"></div>
	              	</div>

			        <div class="row">
		              	
		              	<div class="col-sm-12">

				          	<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				                <thead>
					                <tr role="row">
					                	<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Nome</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Endereço de entrega</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Bairro</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Cidade</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Telefone</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">CEP</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">U.F</th>
					                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ação version: activate to sort column ascending">Ação</th>
					                </tr>
				                </thead>
				                <tbody>
				                	
				                	@foreach( $transportadoras as $transportadora )
									<tr role="row" class="odd">
										<td class="sorting_1">{{ $transportadora->id }}</td>
										<td>{{ $transportadora->nome }}</td>
										<td>{{ $transportadora->endereco }}</td>
										
										<td>{{ $transportadora->bairro->nome }}</td>
										<td>{{ $transportadora->cidade->nome }}</td>
										<td>{{ $transportadora->telefone }}</td>
										<td>{{ $transportadora->cep }}</td>
										<td>{{ $transportadora->estado->sigla }}</td>
										<td>
											<a class="fa-btn label label-success" href="{{route('admin.transportadoras.editar',$transportadora->id)}}">Editar</a>
											<a class="fa-btn label label-danger" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{route('admin.transportadoras.deletar',$transportadora->id)}}' }">Deletar</a>
										</td>
									</tr>
									@endforeach
				            	</tbody>
				            	<tfoot>      		
					            </tfoot>
								<!-- /.BOTAO ADICIONAR-->
					        </table>
						    <div>
								<a class="btn btn-primary" href="{{route('admin.transportadoras.adicionar',$cliente->id)}}">Adicionar Transportadora</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
  		</div>
	</div>

</div>
@endsection