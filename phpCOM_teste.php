<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Teste para abrir uma aplicação word e escrever conteúdo...
            //O modulo COM nao se encontra incluido por defeito em PHP V.5.4.5, código não funciona
            $word = new COM("word.application") or die ("Impossivel iniciar o word");
            print "Word activo, versao {$word->Version}\n<\br>";
            $word->Visible = 1;
            $word->Documents->Add();
            $word->Selection->TypeText("Este e um teste com PHP4...");
            $word->Documents[1]->SaveAs("C:/XAMPP/htdocs/PhpProject/teste_com_php.doc");
            $word->Quit();
        ?>
    </body>
</html>
