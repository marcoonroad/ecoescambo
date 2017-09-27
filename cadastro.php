<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8" />
	<title>Ecoescambo</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.html';
	 ?>

	<div class="container">
		<div class="jumbotron">
			<h1 class="display-3 text-center">EcoEscambo</h1>
			<hr class="my-4">
			<form method="POST" action="tratamentoCadastro.php">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="nome@mail.com">
				</div>
				<div class="form-group">
					<label>Telefone:</label>
					<input type="text" name="telefone" id="telefone" class="form-control" placeholder="21 98670-1040">
				</div>
				<div class="form-group">
					<label>CEP:</label>
					<input type="text" name="cep" id="cep" class="form-control" placeholder="2221040">
				</div>
				<div class="form-group">
					<label>Senha:</label>
					<input type="password" name="senha" id="senha" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirme a senha:</label>
					<input type="password" name="confirmacaosenha" id="confirmacaosenha" class="form-control">
				</div>
				<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">
			</form>
		</div>
	</div>

	<?php
		require_once 'templates/footer.html';
	 ?>
</body>
</html>
