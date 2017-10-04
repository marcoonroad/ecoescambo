<?php

  class Produto {

    private $id;
    private $nome;
    private $descricao;
    private $foto;
    private $usuarioId;

    function __construct ($nome, $descricao, $foto, $usuarioId) {
        $this -> nome      = $nome;
        $this -> descricao = $descricao;
        $this -> foto      = $foto;
        $this -> usuarioId = $usuarioId;
    }

    public function getNome ( ) {
        return $this -> nome;
    }

    public function setNome ($no) {
        $this -> nome = $no;
    }

    public function getDescricao ( ) {
        return $this -> descricao;
    }

    public function setDescricao ($desc) {
        $this -> descricao = $desc;
    }

    public function getFoto ( ) {
        return $this -> foto;
    }
    public function setFoto ($fo) {
        $this -> foto = $fo;
    }

    public function getUsuarioId ( ) {
        return $this -> usuarioId;
    }
    public function setUsuarioId ($usuarioId) {
        $this -> usuarioId = $usuarioId;
    }

    public function persisteProduto($conexaoBD){
        $stmt = $conexaoBD -> prepare (
            'INSERT INTO produto (nome,descricao,foto,usuarioid) ' .
            'VALUES (:nome, :descricao, :foto, :usuarioid)'
        );

        $stmt -> bindValue (':nome',      $this -> nome);
        $stmt -> bindValue (':descricao', $this -> descricao);
        $stmt -> bindValue (':foto',      $this -> foto);
        $stmt -> bindValue (':usuarioid', $this -> usuarioId);

        $stmt -> execute ( );
    }
  }

?>
