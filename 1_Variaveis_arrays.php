<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1-Variaveis e Arrays</title>
    </head>
    <body>
        <?php
            echo "Hello world!<br>";
            //Variáveis
            $x = 1;
            $y = 2;
            $soma = $x + $y;
            echo "A soma das variaveis e: $soma.<br>";
            
            $impares = [1,3,5,"batata",9]; // arrays podem conter diferentes variáveis
            $pares = [2,4,6,8,10];
            $impares[5] = 11;
            print_r($impares); // imprime todo o array
            echo "<br>";
            
            unset($impares[3]); // Remove um elemento
            print_r($impares);
            echo "<br>";
            
            $contagem = count($impares); //conta o nº de elementos
            echo "O array \"impares\" tem $contagem itens.";
            echo "<br>";
            
            $primeiro = reset($impares); //Retorna o primeiro elemento e faz reset ao  
                                         // ponteiro de iteração interno.
            $ultimo = end($impares); //Retorna o último elemento
            
            $todos = $impares + $pares; // Isto não é Python, mas...
            print_r($todos);
            echo "<br>";
            
            array_push($todos, 3,4); // Adiciona elementos ao array
            
            array_pop($todos); // Remove elementos
            array_pop($todos);
            
            array_push($todos, $pares); // Adiciona um array ao array
            print_r($todos);            // o 6º elemento é um array
            echo "<br>";
            
            $impares = [1,3,5,7,9];
            $pares = [2,4,6,8,10];
            $todos = array_merge($impares, $pares); //concatenação
            sort($todos); //ordenação
            print_r($todos);
            
            //...
        ?>
    </body>
</html>
