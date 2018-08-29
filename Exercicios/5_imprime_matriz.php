<?php
    $tam = 6;
    
    function cria_matriz_1($tam){   //Método 1
        $matriz = array();
        for($i = 0; $i < $tam; $i++){
            for($j = 0; $j < $tam; $j++){
                $matriz[$i][$j] = ($i + 1) * ($j+ 1);
            }
        }
        return $matriz;
    }
    
    function cria_matriz_2($tam){   //Método 2
        $matriz = [];
        $temp = [];
        for($i = 1; $i <= $tam; $i++){
            for($j = 1; $j <= $tam; $j++){
                array_push($temp, $i * $j);
            }
            array_push($matriz, $temp);
            foreach ($temp as $key => $value){
                unset($temp[$key]);
            }
        }
        return $matriz;
    }
    
    function print_matriz($matriz, $tam){
        for($i = 0; $i < $tam; $i++){
            for($j = 0; $j < $tam; $j++){
                echo str_pad($matriz[$i][$j], 4, "_", STR_PAD_LEFT);    //adiciona um padding à esquerda para 4 "_"
            }
            echo "<br>";
        }
    }
    print_r(cria_matriz_1($tam));
    echo "<br><br>";
    print_r(cria_matriz_2($tam));
    echo "<br><br>";
    print_matriz(cria_matriz_1($tam), $tam);
    echo "<br><br>";
    //Não funciona
    //print_matriz(cria_matriz_2($tam), $tam);
    
?>

