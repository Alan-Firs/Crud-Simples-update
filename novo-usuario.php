<h1>Novo Usuário</h1>
<form id="address-form" action="?page=salvar" method="post">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>CEP</label>
		<input type="text" name="cep" class="form-control" id="cep" minlength="8" maxlength="8" required>
	</div>
	<div class="mb-3">
		<label>Estado</label>
		<input name="estado" id="estado" class="form-control" readonly required data-input>
	</div>
	<div class="mb-3">
		<label>Cidade</label>
		<input type="text" name="cidade" class="form-control" id="cidade" data-input required readonly>
	</div>
	<div class="mb-3">
		<label>Bairro</label>
		<input type="text" name="bairro" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Rua</label>
		<input type="text" name="rua" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Número</label>
		<input type="int" name="numero" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Complemento</label>
		<input type="text" name="complemento" class="form-control" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>