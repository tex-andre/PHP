<?php
    function soma($numeros){
        $soma = 0;
        foreach ($numeros as $numero)
            $soma += $numero;
        return $soma;
    }
    
    function diz_ola($nome){
        echo "Ola " . $nome . "!<br>";
    }
?>
