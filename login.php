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
      <form method="POST" action="tratamentoLogin.php">
        <div class="form-group">
          <label>E-mail:</label>
          <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Senha:</label><input type="password" name="senha" id="senha" class="form-control">
        </div>
        <input type="submit" value="Login" id="cadastrar" name="cadastrar" class="btn btn-primary">
      </form>
    </div>
  </div>

	<?php
		require_once 'templates/footer.html';
	 ?>
</body>
</html>
