<div class="box box-default">
    <div class="box-header with-border">
          <h3 class="box-title">Dados do Paciente</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
    </div>
	    
    <div class="box-body">
	    
		<div class="row">
			<div class="form-group col-md-6">
		    		<label>Nome Paciente</label>
						<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : ''}}" placeholder="Entre com o nome do paciente">
				</div>
				<div class="form-group col-md-6">
					<label>Nome Social</label>
					<input type="text" name="nome_social" class="form-control" value="{{ isset($registro->nome_social) ? $registro->nome_social : ''}}" placeholder="Entre com o nome social do paciente">
				</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
		    		<label>E-mail</label>
						<input type="email" name="email" class="form-control" value="{{ isset($registro->email) ? $registro->email : ''}}" placeholder="Entre com o e-mail do paciente">
			</div>
			<div class="form-group col-md-3">
				<label>RG</label>
				<input id="rg" type="text" name="rg" class="form-control" value="{{ isset($registro->rg) ? $registro->rg : ''}}" placeholder="Entre com o rg">
			</div>
			<div class="form-group col-md-3">
				<label>CPF</label>
				<input id="cpf" type="text" name="cpf" class="form-control" value="{{ isset($registro->cpf) ? $registro->cpf : ''}}" placeholder="Entre com o CPF">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2">
	    		<label>Telefone Fixo</label>
					<input id="telefone" name="telefone" class="form-control" value="{{ isset($registro->telefone) ? $registro->telefone : ''}}" placeholder="Fixo">
			</div>
			<div class="form-group col-md-2">
				<label>Celular</label>
				<input type="text" id="celular" name="celular" class="form-control" value="{{ isset($registro->celular) ? $registro->celular : ''}}" placeholder="Celular">
			</div>
			<div class="form-group col-md-2">
				<label>Celular Adicional</label>
				<input type="text" id="celular2" name="celular_2" class="form-control" value="{{ isset($registro->celular_2) ? $registro->celular_2 : ''}}" placeholder="Celular 2">
			</div>
			<div class="form-group col-md-3">
				<label>Nome Contato</label>
				<input type="text" name="nome_contato" class="form-control" value="{{ isset($registro->nome_contato) ? $registro->nome_contato : ''}}" placeholder="Nome contato">
			</div>
			<div class="form-group col-md-2">
				<label>Telefone Contato</label>
				<input id="tel_contato" type="text" name="tel_contato" class="form-control" value="{{ isset($registro->tel_contato) ? $registro->tel_contato : ''}}" placeholder="Telefone contato">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
					<label>Data Nascimento</label>
						<input type="date" id="nascimento" name="nascimento" class="form-control" value="{{ isset($registro->nascimento) ? $registro->nascimento : ''}}" placeholder="Data nascimento">
			</div>
			<div class="form-group col-md-4">
						<label>Responsável (acompanhante)</label>
						<input type="text" name="responsavel" class="form-control" value="{{ isset($registro->responsavel) ? $registro->responsavel : ''}}" placeholder="Responsável quando paciente menor de idade">
			</div>
			<div class="form-group col-md-2">
				<label>Sexo</label>
				    <select name="sexo_id" class="form-control">
				        @foreach($sexos as $sexo)
				            <option value="{{ $sexo->id }}" {{(isset($registro->sexo_id) && $registro->sexo_id == $sexo->id  ? 'selected' : '')}}>{{ $sexo->nome }}</option>
				        @endforeach
				    </select>
			</div>
			<div class="form-group col-md-3">
				<label>Profissão</label>
				    <select name="profissao_id" class="form-control">
				        @foreach($profissoes as $profissao)
				            <option value="{{ $profissao->id }}" {{(isset($registro->profissao_id) && $registro->profissao_id == $profissao->id  ? 'selected' : '')}}>{{ $profissao->nome }}</option>
				        @endforeach
				    </select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3">
					<label>Estado Civil</label>
					    <select name="estado_civil_id" class="form-control">
					        @foreach($estados_civis as $estado_civil)
					            <option value="{{ $estado_civil->id }}" {{(isset($registro->estado_civil_id) && $registro->estado_civil_id == $estado_civil->id  ? 'selected' : '')}}>{{ $estado_civil->nome }}</option>
					        @endforeach
					    </select>
			</div>
			<div class="form-group col-md-2">
					<label>Classe do Paciente</label>
					    <select name="classe_id" class="form-control">
					        @foreach($classes as $classe)
					            <option value="{{ $classe->id }}" {{(isset($registro->classe_paciente_id) && $registro->classe_paciente_id == $classe->id  ? 'selected' : '')}}>{{ $classe->nome }}</option>
					        @endforeach
					    </select>
					   
			</div>
			<div class="form-group col-md-2">
				<label>Status do Paciente</label>
		            <select name="status_id" class="form-control">
				        @foreach($status as $stat)
				            <option value="{{ $stat->id }}" {{(isset($registro->status_id) && $registro->status_id == $stat->id  ? 'selected' : '')}}>{{ $stat->nome }}</option>
				        @endforeach
				    </select>
			</div>
			<div class="form-group col-md-5">
		            <label>Foto Paciente</label>
						<input type="file" name="foto" class="form-control" value="{{ isset($paciente->foto) ? $paciente->foto : ''}}" placeholder="Selecione arquivo da foto do paciente">
	        </div>
		</div>
		<div class="row">
			<div class="form-group col-md-2">
		            <label>CEP</label>
						<input type="text" id="cep" name="cep" class="form-control" value="{{ isset($registro->cep) ? $registro->cep : ''}}" placeholder="Entre com o CEP">
	        </div>
			<div class="form-group col-md-8">
		            <label>Endereço</label>
						<input type="text" name="endereco" class="form-control" value="{{ isset($registro->endereco) ? $registro->endereco : ''}}" placeholder="Entre com o endereço">
	        </div>
	        <div class="form-group col-md-2">
	            <label>Número</label>
					<input type="text" name="numero" class="form-control" value="{{ isset($registro->numero) ? $registro->numero : ''}}" placeholder="número">
	        </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
	            <label>Complemento</label>
					<input type="text" name="complemento" class="form-control" value="{{ isset($registro->complemento) ? $registro->complemento : ''}}" placeholder="Entre com o complemento do endereço">
	        </div>
			<div class="form-group col-md-2">
	            <label>Bairro</label>
					<div class="input-field">
					    <select name="bairro_id" class="form-control">
					        @foreach($bairros as $bairro)
					            <option value="{{ $bairro->id }}" {{(isset($registro->bairro_id) && $registro->bairro_id == $bairro->id  ? 'selected' : '')}}>{{ $bairro->nome }}</option>
					        @endforeach
					    </select>
					</div>
	        </div>
			<div class="form-group col-md-2">
	            <label>Cidade</label>
					<select name="cidade_id" class="form-control">
						@foreach($cidades as $cidade)
					            <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
				        @endforeach
					</select>
	        </div>
			<div class="form-group col-md-2">
	            <label>Estado</label>
					<div class="input-field">
					    <select name="estado_id" class="form-control">
					      @foreach($estados as $estado)
					            <option value="{{ $estado->id }}" {{(isset($registro->estado_id) && $registro->estado_id == $estado->id  ? 'selected' : '')}}>{{ $estado->sigla }}</option>
					        @endforeach
					    </select>
					</div>
	        </div>
		</div>
</div>