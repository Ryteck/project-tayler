<?php

class Cadastrar{

private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }


public function verif($login, $email){
        
        $this->conexao->getConnection();
        
        

    }

public function salvar($nome_1, $nome_2, $login, $nasc, $senha, $email, $prod){
        
        $this->conexao->getConnection();
        
        $this->conexao->getConnection() ->query("INSERT INTO usuario (nome, sobrenome, usuario, senha, nasc, email, produtor) VALUES ('$nome_1', '$nome_2', '$login', '$senha', '$nasc', '$email', '$prod')") or die($this->conexao->getConnection()->error);

    }

}

?>