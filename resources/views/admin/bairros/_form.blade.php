<div class="box box-default">
	<div class="container">
	  <div class="box-header with-border">
	    <h3 class="box-title">Novo Bairro</h3>
	  </div>
	  <div class="box-body">
	    <div class="form-group" >
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : ''}}" placeholder="Entre com o nome do bairro">
	    </div>
	  </div>
	  <!-- /.box-body -->
	</div>
</div>