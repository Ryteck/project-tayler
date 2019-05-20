<?php

class Conectar{

private $conexao;


public function verif($login, $email){

        $this->conexao->getConnection();



    }

public function salvar($nome_1, $nome_2, $login, $email, $senha){

        $this->conexao->getConnection();

        $this->conexao->getConnection() ->query("INSERT INTO usuario (nome, sobrenome, usuario, email, senha) VALUES ('$nome_1', '$nome_2', '$login', '$email', '$senha')") or die($this->conexao->getConnection()->error);

    }

}

?>
