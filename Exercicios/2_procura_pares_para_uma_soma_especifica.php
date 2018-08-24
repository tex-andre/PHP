<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function pares_da_soma($nums, $numeroSoma){
                $listaPares = "";
                for($i = 0; $i <= count($nums); $i++){
                    for($j = 0 + $i; $j < count($nums); $j++){
                        if(($nums[$i] + $nums[$j]) == $numeroSoma){
                            $listaPares .= $nums[$i] . "," .$nums[$j] ."; "; // .= append
                        }
                    }
                }
                return $listaPares;
            }
            $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
            for($i = 3; $i <= 20; $i++){
                echo pares_da_soma($numeros, $i). "<br>";
            }
        ?>
    </body>
</html>

