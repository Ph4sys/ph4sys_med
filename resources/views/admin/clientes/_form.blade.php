<div class="box box-default">
	    <div class="box-header with-border">
	          <h3 class="box-title">Dados do Cliente</h3>

	          <div class="box-tools pull-right">
	            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
	          </div>
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	      	<div class="row">
		        <div class="col-md-6">
		          <div class="form-group">
		            
		           <label>Razão Social</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : ''}}" placeholder="Entre com a razão social">
		          </div>
			          <!-- /.form-group -->
			          <div class="form-group">
			            <label>Classe do Cliente</label>
						    <select name="classe_id" class="form-control">
						        @foreach($classes as $classe)
						            <option value="{{ $classe->id }}" {{(isset($registro->classe_id) && $registro->classe_id == $classe->id  ? 'selected' : '')}}>{{ $classe->classe }}</option>
						        @endforeach
						    </select>
			          </div>

			          <!-- /.form-group -->
			          <div class="form-group">
			            <label>Endereço</label>
							<input type="text" name="endereco" class="form-control" value="{{ isset($registro->endereco) ? $registro->endereco : ''}}" placeholder="Entre com o endereço">
			          </div>
				
					<div class="form-group">
						<label>Cidade</label>
						<select name="cidade_id" class="form-control">
							@foreach($cidades as $cidade)
						            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
					        @endforeach
						</select>
					</div>

					<div class="form-group">
						<label>CEP</label>
						<input id="cep" type="text" name="cep" class="form-control" value="{{ isset($registro->cep) ? $registro->cep : ''}}" placeholder="Entre com o CEP">
					</div>
					
					<div class="form-group">
						<label>Inscrição Estadual</label>
						<input id="iest" type="text" name="inscricao" class="form-control" value="{{ isset($registro->inscricao) ? $registro->inscricao : ''}}" placeholder="Entre com a inscrição estadual">
					</div>

		          <!-- /.form-group -->
		        </div>
		        <!-- /.col -->
		        <div class="col-md-6">
		          	<div class="form-group">
		            	<label>Situação do Cliente</label>
			            <select name="situacao_id" class="form-control">
					        @foreach($situacoes as $situacao)
					            <option value="{{ $situacao->id }}" {{(isset($registro->situacao_id) && $registro->situacao_id == $situacao->id  ? 'selected' : '')}}>{{ $situacao->situacao }}</option>
					        @endforeach
					    </select>
		          	</div>

		          	<div class="form-group">
			          <label>Limite de Crédito</label>
							<input type="text" name="credito" class="form-control" value="{{ isset($registro->credito) ? $registro->credito : ''}}">
					</div>

					<div class="form-group">
						<label>Bairro</label>
						<div class="input-field">
						    <select name="bairro_id" class="form-control">
						        @foreach($bairros as $bairro)
						            <option value="{{ $bairro->id }}" {{(isset($registro->bairro_id) && $registro->bairro_id == $bairro->id  ? 'selected' : '')}}>{{ $bairro->nome }}</option>
						        @endforeach
						    </select>
						</div>
					</div>

					<div class="form-group">
						<label>Estado</label>
						<div class="input-field">
						    <select name="estado_id" class="form-control">
						      @foreach($estados as $estado)
						            <option value="{{ $estado->id }}" {{(isset($registro->estado_id) && $registro->estado_id == $estado->id  ? 'selected' : '')}}>{{ $estado->sigla }}</option>
						        @endforeach
						    </select>
						</div>
					</div>
					
					<div class="form-group">
						<label>CNPJ</label>
						<input id="cnpj" type="text" name="cnpj" class="form-control" value="{{ isset($registro->cnpj) ? $registro->cnpj : ''}}" placeholder="Entre com o CNPJ">
					</div>
					
					<div class="form-group">
						<label>Responsável Metalmax</label>
						<input type="text" name="responsavel" class="form-control" value="{{ isset($registro->responsavel) ? $registro->responsavel : ''}}" placeholder="Responsável atender a empresa">
					</div>
		
				</div>
	     		
			<!-- -->
	     	</div> 
	    </div>
	   </div>

<!--
	<div class="box box-default">
		<div class="box-header with-border">
		      
		      <h3 class="box-title">Contato</h3>

			  <div class="box-tools pull-right">
			    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			  </div>
		</div>

		<div class="box-body">
	      	<div class="row">
		        
		        <div class="col-md-6">
		          <div class="form-group">
		          	<label>Nome Contato</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->contato_id) ? $registro->contato_id : ''}}" placeholder="Entre com o nome do contato">
		          </div>

		          <div class="form-group">
		          	<label>Celular</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->contato_id) ? $registro->contato_id : ''}}" placeholder="Entre com o nome do contato">
		          </div>
		        </div>

				<div class="col-md-6">
		          <div class="form-group">
		          	<label>Telefone</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->contato_id) ? $registro->contato_id : ''}}" placeholder="Entre com o nome do contato">
		          </div>

		          <div class="form-group">
		          	<label>E-mail</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->contato_id) ? $registro->contato_id : ''}}" placeholder="Entre com o nome do contato">
		          </div>

		        </div>

		     </div>
		</div>
	</div>
-->
</div>