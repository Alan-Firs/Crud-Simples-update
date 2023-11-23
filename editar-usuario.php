<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM login WHERE ID=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form id="address-form" action="?page=salvar" method="post">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="ID" value="<?php print $row->ID; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="Nome" value="<?php print $row->Nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="Email" value="<?php print $row->Email; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="Senha" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>CEP</label>
		<input id="cep" type="text" name="cep" value="<?php print $row->CEP; ?>" class="form-control" readonly data-input>
	</div>
	<div class="mb-3">
		<label>Estado</label>
		<input id="estado" type="text" name="estado" value="<?php print $row->CEP; ?>" class="form-control" readonly data-input>
	</div>
	<div class="mb-3">
		<label>Cidade</label>
		<input type="text" name="Cidade" class="form-control" id="cidade" value="<?php print $row->Cidade; ?>" data-input readonly>
	</div>
	<div class="mb-3">
		<label>Bairro</label>
		<input type="text" name="Bairro" value="<?php print $row->Bairro; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Rua</label>
		<input type="text" name="Rua" value="<?php print $row->Rua; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Número</label>
		<input type="int" name="Número" value="<?php print $row->Número; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Complemento</label>
		<input type="text" name="Complemento" value="<?php print $row->Complemento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>