<?php
    class Pessoa{
        public function __construct($nome, $sobrenome, $idade, $pet) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
            $this->pet = $pet;
        }
        
        public function nome_completo() {
            return $this->nome . " " . $this->sobrenome;
        }
        public function apresentacao(){
            return "O seu nome e " . $this->nome_completo() . ", tem ". $this->idade . " anos e tem como animal de estimacao, " . $this->pet;
        }
        
    }
?>

