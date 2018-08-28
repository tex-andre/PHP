<?php

class Estudante{
    //Esta função é executada por definição ao ser criado um novo objecto da classe Estudante.
    public function __construct($primeiro_nome, $ultimo_nome, $numero){
        $this->primeiro_nome = $primeiro_nome;     
        $this->ultimo_nome = $ultimo_nome;
        $this->numero = $numero;
    }
    public function nome_completo() {
        return $this->primeiro_nome . " " . $this->ultimo_nome;
    }
    public function apresentacao(){
        return "O meu nome e " . $this->nome_completo() . " e sou o numero ". $this->numero;
    }
}
?>

