<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function somaDigitos($numero){
                $soma = 0;
                for($i = 0; $i< strlen($numero) ;$i++){
                    $soma += $numero[$i];
                }
                return $soma;
            }
            echo somaDigitos("123");
        ?>
    </body>
</html>
