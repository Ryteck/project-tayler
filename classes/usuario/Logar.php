<?php

class Logar{

private $conexao;
    
    function __construct() {
        $this->conexao = Conexao::getInstance();
    }

public function logar($login, $senha, $conn){
        
        $this->conexao->getConnection();
        
        

    }

}

?>