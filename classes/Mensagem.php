<?php

class Mensagem{

private $text;
private $arquivo;

public Mensagem($text, $arquivo){

if ($text != null){
	$this->text = $text;
}else{
	$this->text = null;
}

if ($arquivo != null){
	$this->arquivo = $arquivo;
}else{
	$this->arquivo = null;
}

}

public function getText() {
        return $this->text;
}

public function getArquivo() {
        return $this->arquivo;
}

}

?>