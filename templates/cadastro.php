<?php

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cep = $_POST['cep'];
  $senha = MD5($_POST['senha']);
  $confirmacaoSenha = MD5($_POST['confirmacaosenha']);

  if($senha === $confirmacaoSenha){
    //echo"<script language='javascript' type='text/javascript'>alert('Você inseriu duas senhas iguais');</script>";
  }
  else{
     echo"<script language='javascript' type='text/javascript'>alert('Você inseriu duas senhas diferentes');window.location.href='cadastro.html';</script>";
  }

  if($nome == "" || $nome == null || $senha == "" || $senha == null || $email == "" || $email == null ||
      $confirmacaoSenha == "" || $confirmacaoSenha = null || $cep == "" || $cep == null || $telefone == "" || $telefone == null){
      echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='cadastro.html';</script>";
  }

  // if($senha !== $confirmacaoSenha){
  //   echo"<script language='javascript' type='text/javascript'>alert('Você inseriu duas senhas diferentes');window.location.href='cadastro.html';</script>";
  // }


  require_once '../services/validadoresService.php';
  require_once '../model/Usuario.php';

  $validador = new Validador();
  if(!$validador->validarEmail($email))
    echo"<script language='javascript' type='text/javascript'>alert('Insira um e-mail válido.');window.location.href='cadastro.html';</script>";
  if(!$validador->validarTelefone($telefone))
    echo"<script language='javascript' type='text/javascript'>alert('Insira um telefone válido.');window.location.href='cadastro.html';</script>";
  if(!$validador->validarCEP($cep))
    echo"<script language='javascript' type='text/javascript'>alert('Insira um CEP válido.');window.location.href='cadastro.html';</script>";
  if(!$validador->validarSenha($senha))
    echo"<script language='javascript' type='text/javascript'>alert('Insira uma senha válida.');window.location.href='cadastro.html';</script>";

  $usuario = new Usuario($nome, $email, $telefone, $cep, $senha);

//conexão com o bd
  try {
    $conexaoBD = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'vertrigo');
    if($usuario->persisteUsuario($conexaoBD))
      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../index.php'</script>";
    else
      echo"<script language='javascript' type='text/javascript'>alert('Ocorreu um erro! Usuário não cadastrado.');window.location.href='../index.php'</script>";

      // verificacao de login igual *******************************************************
    // $stmt = $conn->prepare('SELECT login FROM usuario WHERE login = :login');
    // $stmt->execute(array('login' => $login));
    //
    // $result = $stmt->fetchAll();
    //
    // if ( count($result) ) {
    //   echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
    //   die();
    //   //foreach($result as $row) {
    //   //  print_r($row);
    //   }
    //  else {
    //   $stmt = $conn->prepare('INSERT INTO usuario (login,senha,email) VALUES (:login, :senha, :email)');
    //   $stmt->bindValue(':login', $login);
    //   $stmt->bindValue(':senha', $senha);
    //   $stmt->bindValue(':email', $email);
    //
    //   $stmt->execute();
      //
    }
    catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar este usuário');window.location.href='cadastro.html'</script>";
  }

?>
