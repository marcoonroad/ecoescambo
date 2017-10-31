<?php

  $email            = filter_input (INPUT_POST, "email",            FILTER_SANITIZE_STRING);
  $senha            = filter_input (INPUT_POST, "senha",            FILTER_SANITIZE_STRING);

  $conexaoBD = new PDO('mysql:host=localhost;dbname=ecoescambo', 'root', 'maribibi');
    $stmt = $conexaoBD->prepare('SELECT id, nome, email, telefone, senha FROM usuario WHERE email=:email AND senha=:senha');
    $stmt->bindParam( ':email', $email, PDO::PARAM_STR);
    $stmt->bindParam( ':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0){
      $check = $stmt->fetch(PDO::FETCH_ASSOC);
      //var_dump($check['nome']);
      setcookie("usuario", $check["nome"]);
      session_start();
      $_SESSION["usuario"]=$check["nome"];
      echo"<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
    }
 ?>
