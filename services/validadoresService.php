<?php

  class Validador {

    public function validarEmail ($email) {
        $pattern = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";

        return $this -> validar ($pattern, $email);
    }

    public function validarSenha ($senha) {
        if (strlen($senha) < 6){
            return false;
        }

        $pattern = "/([a-zA-Z]*([0-9]+[a-zA-Z]+)|([a-zA-Z]+[0-9]+)[0-9]*)+/";

        return $this -> validar ($pattern, $senha);
    }

    public function validarTelefone ($telefone) {
        if (strlen($telefone) < 9) {
            return false;
        }
        // $pattern = "/(((?:9\d|[2-9])\d{3})\-?(\d{4}))/";
        $pattern = "/(\(?\d{2}\)?) (9?\d{4}-?\d{4})/";

        return $this -> validar($pattern, $telefone);
    }

    public function validarCEP ($cep) {
        if (strlen ($cep) !== 8) {
            return false;
        }

        $pattern = "/([0-9]{8})/";
        return $this -> validar($pattern, $cep);
    }

    public function validar ($pattern, $atributo) {
        $resultado = preg_match ($pattern, $atributo);

        if ($resultado === 1) {
            return true;
        }
        else {
            return false;
        }
    }

  }

?>
