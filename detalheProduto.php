<?php
  $produto = filter_input( INPUT_GET, "produto", FILTER_SANITIZE_STRING);
  $arrayApoio = explode(".", $produto);
  $stringApoio = $arrayApoio[0];
  $arrayApoio = explode("/", $stringApoio);
  $nomeProduto = $arrayApoio[1];
  $arrayDescricaoProdutos = [
      "bolsa" => "Uma bolsa bem bacana",
      "brigadeiro" => "Um brigadeiro delicioso",
      "brinquedo" => "Brinquedo super divertido! Sua criança irá adorar!",
      "camisa" => "Bela camisa preta, super estilosa!",
      "cartoes" => "Cartoes maravilhosos! Ideais para todas as datas",
      "creme" => "Creme muito bom. Vale a pena conferir",
      "lego" => "Lego dispensa comentários. A diversão é garantida",
      "legume" => "Ideal para sua alimientação saudável",
      "mochila" => "Bela mochila, muito bem conservada",
      "palmilha" => "Palmilha nova, sem uso!",
      "panda" => "Panda muito amável. Você vai adorar. Atenção pois come demais.",
      "picole" => "Invrivelmente gostoso",
      "presente" => "Um presente surpresa",
      "raquete" => "Raquete com pouco uso, ideal para seu ping-pong-ploc",
      "sorteve" => "Sorvete napolitano delicioso"
  ];

    session_start();
    if(count($_SESSION) === 0){
        echo"<script language='javascript' type='text/javascript'>window.location.href='login.php';</script>";
    }


 ?>

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
      <div class="row">
        <div class="col-sm-12">
          <?php
            printf('<img src="%s" class="img-rounded"/></a>', $produto);
            printf('<p class="text-justify"><b>Produto:</b> %s </p>', $nomeProduto);
            printf('<p class="text-justify"><b>Descrição:</b> %s </p>', $arrayDescricaoProdutos[$nomeProduto]);
           ?>
        </div>
      </div>
    </div>

   <?php
    require_once 'templates/footer.html';
   ?>
 </body>
</html>
