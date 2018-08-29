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
         global $nome;          //variável $nome desta função é a variável global nome
         $nome = "Andre";
        }
        function localVar(){
            $nome = "Pedro";    //$nome alterado localmente
        }
        localVar();
        globalVar();
        echo "$nome<br>";
        
        //---------------------------------------------\\
        function NOstaticVar(){
            $num = 1;
            echo $num ."<br>";
            $num++;
        }
        function staticVar(){
            static $num = 1;    //Define $num como variável estática da função
            echo $num ."<br>";
            $num++;
        }
        
        for($i = 0; $i< 10; $i++){
            NOstaticVar();
        }
        echo "---<br>";
        for($i = 0; $i< 10; $i++){
            staticVar();
        }
        ?>
    </body>
</html>
