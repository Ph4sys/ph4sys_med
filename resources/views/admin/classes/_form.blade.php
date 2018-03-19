<div class="box box-default">
	<div class="container">
	  <div class="box-header with-border">
	    <h3 class="box-title">Nova Classe</h3>
	  </div>
	  <div class="box-body">
	    <div class="form-group" >
			<label>Classe</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : ''}}" placeholder="Entre com a classe">
	    </div>
	  </div>
	  <!-- /.box-body -->
	</div>
</div>