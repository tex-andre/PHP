<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $clientes = simplexml_load_file("clientes.xml");
            foreach ($clientes->cliente as $cliente){
                print "$cliente->nome tem a conta n' $cliente->conta_n </br>";
            }
        ?>
    </body>
</html>
