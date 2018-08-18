<?php /*phpForm1.php*/ ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            // Executar form1.html primeiro
            echo "O meu nome e " . $_POST["nome"] . " tenho " .$_POST["idade"]. " anos e gosto da marca " .$_POST["marca"]. "."; 
        ?>
    </body>
</html>
