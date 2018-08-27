<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include ("4.1_funcao_soma.php"); //importa o conteúdo de um ficheiro PHP
            //funções do ficheiro importado
            echo diz_ola("Andre");
            echo soma([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        ?>
    </body>
</html>
