<?php
	$arquivo = glob('img/*.*');
	$quantidade = 10;
	$paginaAtual = (isset($_GET['paginacao'])) ? intval($_GET['paginacao']) : 1;
	$paginas = array_chunk($arquivo, $quantidade);
	$quantidadePaginas = count($paginas);
	$resultado = $paginas[$paginaAtual - 1];

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8" />
	<title>Ecoescambo</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
	<header>
		<div class="page-header">
			<ul class="nav nav-tabs">
			  <li role="presentation"><a href="index.php">Produtos</a></li>
			  <li role="presentation"><a href="templates/login.html">Login</a></li>
			  <li role="presentation"><a href="templates/cadastro.html">Cadastro</a></li>
			</ul>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<?php
				foreach ($resultado as $valor) {
					printf('<div class="col-md-3">');
					printf('<img src="%s" class="img-rounded"/>', $valor);
					printf('<p class="text-justify"> legenda da foto </p>');
					printf('</div>');
				}
				echo '</div>';
				echo '<hr>';

				for($i = 1; $i <= $quantidadePaginas; $i++){
					if($i === $paginaAtual){
						printf('<a href="#"><u> %s </u></a>', $i);
					}
					else{
						printf('<a href="?paginacao=%s"> %s </a>', $i, $i);
					}
				}
				echo '</div>';
			 ?>

	<?php
		// 	require_once 'model/Usuario.php';
		// 	require_once 'services/validadoresService.php';
		//
		// 	$usuario = new Usuario("jack bauer", "jack@mail.com", "21 98673-3857", "22225030", "123QWEasd");
		//
		// 	try{
		// 		$conexaoBD = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'vertrigo');
		// 		$usuario->persisteUsuario($conexaoBD);
		// 		// $stmt = $conexaoBD->prepare('INSERT INTO usuario (nome,email,telefone,cep,senha) VALUES (:nome, :email, :telefone, :cep, :senha)');
	  //     // $stmt->bindValue(':nome', "nome do usuario");
	  //     // $stmt->bindValue(':email', "usuario@mail.com");
	  //     // $stmt->bindValue(':telefone', "21 98673-3857");
	  //     // $stmt->bindValue(':cep', "2225030");
	  //     // $stmt->bindValue(':senha', "123QWEasd");
		// 		//
	  //     // $stmt->execute();
		// 	}
		//  catch(PDOException $e) {
		// 		echo 'ERROR: ' . $e->getMessage();
		//  		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
		// }
			// require_once 'model/Produto.php';
			//
			// $prod = new Produto("manolo", "jack", "kkkkkk", 1);
			//
			// try {
		  //   $conn = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'vertrigo');
			// 	$prod->persisteProduto($conn);
			// 	echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');</script>";
			//
			// } catch(PDOException $e) {
			// 		echo 'ERROR: ' . $e->getMessage();
			// 		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
			// }
	 ?>
</body>
</html>
