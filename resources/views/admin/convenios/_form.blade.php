<div class="box box-default">
	<div class="container">
	  <div class="box-header with-border">
	    <h3 class="box-title">Novo Convênio</h3>
	  </div>
	  <div class="box-body">
	    <div class="form-group" >
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : ''}}" placeholder="Entre com o nome do convênio">
	    </div>
	    <div class="form-group" >
			<label>Valor convênio</label>
			<input type="text" name="valor" class="form-control" value="{{ isset($registro->valor) ? $registro->valor : ''}}" placeholder="Entre com o valor do convênio">
	    </div>
	  </div>
	  <!-- /.box-body -->
	</div>
</div>