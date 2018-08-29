<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function teste_GLOBALS() {
                echo "\$GLOBALS:<br>";
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];   // cria uma variável global z e usa as variáveis x e y 
            }

            function teste_SERVER(){
                echo "\$_SERVER:<br>";
                echo $_SERVER['PHP_SELF'];
                echo "<br>";
                echo $_SERVER['SERVER_NAME'];
                echo "<br>";
                echo $_SERVER['HTTP_HOST'];
                echo "<br>";
                echo $_SERVER['HTTP_REFERER'];
                echo "<br>";
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>";
                echo $_SERVER['SCRIPT_NAME'];
            }

            #-------------------------------------------
            $x = 10;
            $y = 7;
            teste_GLOBALS();
            echo $z;
            echo "<br>";
            #-------------------------------------------
            teste_SERVER();
            echo "<br>";
            #-------------------------------------------
            
            ?>
    </body>
</html>
