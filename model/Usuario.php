<?php

  class Usuario{

    private $nome;
    private $email;
    private $telefone;
    private $cep;
    private $senha;

    public function __construct($nome, $email, $telefone, $cep, $senha){
      $this->nome = $nome;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->cep = $cep;
      $this->senha = $senha;
    }

    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getEmail(){
      return $this->nome;
    }
    public function setEmail($email){
      $this->email = $email;
    }

    public function getSenha(){
      return $this->nome;
    }
    public function setSenha($senha){
      $this->senha = $senha;
    }

    public function getTelefone(){
      return $this->telefone;
    }
    public function setTelefone($telefone){
      $this->telefone = $telefone;
    }

    public function getCEP(){
      return $this->cep;
    }
    public function setCEP($cep){
      $this->cep = $cep;
    }

    public function persisteUsuario($conexaoBD){
      $stmt = $conexaoBD->prepare('INSERT INTO usuario (nome,email,telefone,cep,senha) VALUES (:nome, :email, :telefone, :cep, :senha)');

      $stmt->bindValue(':nome', $this->nome);
      $stmt->bindValue(':email', $this->email);
      $stmt->bindValue(':telefone', $this->telefone);
      $stmt->bindValue(':cep', $this->cep);
      $stmt->bindValue(':senha', $this->senha);

      return $stmt->execute();
    }

  }

?>
