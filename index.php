<?php
	$arquivo           = glob('img/*.*');
	$quantidade        = 10;
	$paginaAtual       = (isset($_GET['paginacao'])) ? intval($_GET['paginacao']) : 1;
	$paginas           = array_chunk($arquivo, $quantidade);
	$quantidadePaginas = count($paginas);
	$resultado         = $paginas[$paginaAtual - 1];

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
    <?php require_once 'templates/header.html'; ?>

	<div class="container" style="padding-bottom: 60px;">
        <div class="row">
			<?php
				foreach ($resultado as $valor) {
					printf('<div class="col-md-3">');
                    printf('<a href="detalheProduto.php?produto=%s" class=""><img src="%s"' .
                        'class="picture-content img-rounded"/></a>', $valor, $valor);
					printf('<p class="picture-label text-justify">legenda da foto</p>');
					printf('</div>');
				}
				echo '</div>';
				echo '<hr>';
				for($i = 1; $i <= $quantidadePaginas; $i++){
					if($i === $paginaAtual){
						printf('<a class="page-link" href="#"><u>%s</u></a>', $i);
					}
					else{
						printf('<a class="page-link" href="?paginacao=%s">%s</a>', $i, $i);
					}
				}
				echo '</div>';
            ?>

            <!-- <div class="navbar navbar-default navbar-fixed-bottom">
		    <div class="container">
		       <p class="navbar-text pull-left">© 2014 - Site Built By Mr. M.
		            <a href="http://tinyurl.com/tbvalid" target="_blank" >HTML 5 Validation</a>
		       </p>

		       <a href="http://youtu.be/zJahlKPCL9g" class="navbar-btn btn-danger btn pull-right">
		       <span class="glyphicon glyphicon-star"></span>  Subscribe on YouTube</a>
		    </div>
        </div>  -->

		<?php
 			require_once 'templates/footer.html';
 		?>

</body>
</html>
