<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function primeiro_char_unico($string){
            $char = NULL;
            for($i = 0; $i < strlen($string); $i++){
                $char = substr($string, $i, 1);
                if(substr_count($string, $char) == 1){
                    return $char;
                }
                      
            }
        }
        $string = "yellow";
        echo primeiro_char_unico($string) ."<br>";
        $string = "abacatbcte";
        echo primeiro_char_unico($string) ."<br>";
        ?>
    </body>
</html>
