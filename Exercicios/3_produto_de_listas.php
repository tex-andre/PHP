<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function exemploTrim(){
            $teste = " Hello world! ";
            echo "Sem trim:" .$teste ."<br>";
            echo "Com trim:" .trim($teste) ."<br>";
        }
        function multiplica_listas($l1, $l2){
            $a = explode(" ", trim($l1));   // Retorna um array de substrings de 
                                            // "trim($l1)" divididas pelo delmitador " "
            $b = explode(" ", trim($l2)); 
            foreach ($a as $key => $value){
                $output [$key] = $a[$key]* $b[$key];
            }
            return implode(" ", $output) ."<br>";   // Retorna uma string formada pelos 
                                                    //elementos de $output separados por " "
        }
        echo multiplica_listas(("1 2 3"), ("3 2 1"));
        exemploTrim();
        ?>
    </body>
</html>
