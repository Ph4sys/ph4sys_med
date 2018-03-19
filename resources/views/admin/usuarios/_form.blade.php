<div class="box box-default">
	<div class="container">
	  <div class="box-header with-border">
	    <h3 class="box-title">Novo Usuário</h3>
	  </div>
	  <div class="box-body">
	    <div class="form-group" >
			<label>Nome</label>
			<input type="text" name="name" class="form-control" value="{{ isset($usuario->name) ? $usuario->name : ''}}" placeholder="Entre com o nome">
			
			<label>Endereço de e-mail</label>
			<input type="email"  name="email" class="form-control" value="{{ isset($usuario->email) ? $usuario->email : ''}}"placeholder="Entre com o e-mail">
			
			<label>Senha</label>
			<input type="password" name="password"  class="form-control" placeholder="Entre com a senha">
	    </div>
	  </div>
	  <!-- /.box-body -->
	</div>
</div>