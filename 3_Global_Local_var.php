<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = "Paulo";
        
        function globalVar(){
         global $nome;
         $nome = "Andre";
        }
        function localVar(){
            $nome = "Paulo";
        }
        globalVar();
        
        localVar();
        echo $nome;
        ?>
    </body>
</html>
