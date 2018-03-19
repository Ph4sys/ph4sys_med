@extends('layouts.app')

@section('content')
	
<div class="container">

<section class="content-header">
	<h1>
		Detalhes
		<small>Paciente</small>
	</h1>
	<ol class="bc breadcrumb">
		<li><a href="{{ route('admin.principal')}}"><i class="fa fa-dashboard"></i> Início</a></li>
  		<li><a href="{{ route('admin.pacientes')}}"></i> Pacientes</a></li>
  		<li class="active"><a>Detalhes</a></li>
	</ol>
</section>
  	
  		<div class="box">
			<div class="box-header">
				
				<div class="row col-md-12">
					<tr>
	          			<div class="col-sm-4">
	          				<div class="small-box bg-blue">
							    <div class="inner">
							      <h3>44</h3>
							      <p>Consultas</p>
							    </div>
							    <div class="icon">
							      <i class="ion ion-person-add"></i>
							    </div>
							    <a href="#" class="small-box-footer">
							      {{$paciente->nome}} / {{$paciente->nome_social}} / X anos <i class="fa fa-arrow-circle-up"></i>
							    </a>
							</div>
	          			</div>
	          			<div class="col-sm-8">
	          				
          					<table id="paciente-table" class="table table-bordered">
					        	<tbody>
					        		<tr>
					        			<td colspan="3"><b>E-mail: </b><a href="#">{{$paciente->email}}</a></td>
					        		</tr>
					        		<tr>
					        			<td><b>Sexo: </b>{{$paciente->sexo->nome}}</td>
					        			<td><b>Estado Civil: </b>{{$paciente->estadoCivil->nome}}</td>
					        			<td><b>Profissão </b>{{ $paciente->profissao->nome}}</td>
					        		</tr>
					        		<tr>
					        			<td><b>Classe: </b>{{$paciente->classePaciente->nome}}</td>
					        			<td><b>Situação: </b>{{$paciente->status->nome}}</td>
					        			<td><b>RG: </b>{{$paciente->rg}}</td>
					        		</tr>
					        		<tr>
					        			<td><b>CPF: </b>{{$paciente->cpf}}</td>
					        			<td colspan="2"><b>Responsável: </b>{{$paciente->responsavel}}</td>
					        		</tr>
					        	</tbody>		
							</table>
				          	
	          			</div>
	          		</tr>
		<!--TAB-->
					
		<div class="nav-tabs-custom col-md-12">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Dados" data-toggle="tab" aria-expanded="true"><b>Telefones Contato</b></a></li>
              <li class=""><a href="#Outros" data-toggle="tab" aria-expanded="false"><b>Endereço</b></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="Dados">
                
                <table class="col-sm-6 table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
						<tbody>
				          	
				          	<tr class="odd">
				          		<div class="col-sm-2">
				          			<td><b>Telefone </b>{{ $paciente->telefone}}</td>
				          		</div>
				          		<div class="col-sm-2">
				          			<td><b>Celular </b>{{ $paciente->celular}}</td>
				          		</div>
				          		<div class="col-sm-3">
				          			<td><b>Celular 2 </b>{{ $paciente->celular_2}}</td>
				          		</div>
				          		
				          		
				          	</tr>
							<tr class="odd">
								<div class="col-sm-2">
				          			<td><b>Contato </b>{{ $paciente->nome_contato}}</td>
				          		</div>
				          		<div class="col-sm-3">
				          			<td><b>Tel. Contato </b>{{ $paciente->tel_contato}}</td>
				          		</div>
								<div class="col-sm-2">
				          			<td><b></td>
				          		</div>
				          		
				          		
				          	</tr>
						</tbody>
		          	</table>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="Outros">
 				
 				<table class="col-sm-6 table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
						<tbody>
				          	<tr class="odd">
				          		<div class="col-sm-4">
				          			<td colspan="2"><b>Endereço </b>{{ $paciente->endereco }}</td>
				          		</div>
				          		<div class="col-sm-2">
				          			<td><b>Número </b>{{ $paciente->numero }}</td>
				          		</div>
				          		<div class="col-sm-4">
				          			<td><b>Complemento </b>{{ $paciente->complemento }}</td>
				          		</div>
				          		
				          		
				          	</tr>
				          	<tr class="odd">
				          		<div class="col-sm-3">
				          			<td><b>Bairro </b>{{ $paciente->bairro->nome}}</td>
				          		</div>
				          		<div class="col-sm-3">
				          			<td colspan="2"><b>Cidade </b>{{ $paciente->cidade->nome}}-{{ $paciente->estado->sigla}}</td>
				          		</div>
				          		<div>
				          			<td><b>CEP </b>{{ $paciente->cep}}</td>
				          		</div>
				          		
				          	</tr>
							
						</tbody>
		          	</table>

              </div>
              <!-- /.tab-pane -->

              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div> <!-- /.TAB-->	

		          	
	
		</div>
	</div> <!-- /.box -->


	<div class="box">
		<div class="box-header">
          <h3 class="box-title">Histórico de Consultas</h3>
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

			          	<tr>
			          		<div class="col-sm-8">
			          			<td>TESTE 1</td>
			          		</div>
			          		<div class="col-sm-4">
			          			<td>TESTE 2</td>
			          		</div>
			          	</tr>

			          	<tr>
			          		<div class="col-sm-2">
			          			<td><b>TESTE</b> 1</td>
			          		</div>
			          		<div class="col-sm-10">
			          			<td><b>TESTE</b> 2</td>
			          		</div>
			          	</tr>

					</div>
				</div>
			</div>	
		</div>
	</div>

</div>
@endsection