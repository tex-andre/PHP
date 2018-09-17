<!DOCTYPE html>
<?php
    //POST recebe valores de "form2.html"
    
    // indexes para cookies
    $cookie_nome = "nome";
    $cookie_sobrenome = "sobrenome";
    $cookie_idade = "idade";
    $cookie_pet = "pet";
    
                //index         //valor     //validade     // "/" define que o cookie está disponivel para todo o site
    setcookie($cookie_nome, $_POST["nome"], time() + 86400 , "/");          // 86400 corresponde a 1 dia
    setcookie($cookie_sobrenome, $_POST["sobrenome"], time() + 86400 , "/");
    setcookie($cookie_idade, $_POST["idade"], time() + 86400 , "/");
    setcookie($cookie_pet, $_POST["pet"], time() + 86400 , "/");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "Classe_Pessoa.php";

            if (isset($cookie_nome)){ //O cookie existe?
                echo "<br>O cookie foi bem criado!<br>";
            }

            $utilizador = new Pessoa($_COOKIE[$cookie_nome], $_COOKIE[$cookie_sobrenome], $_COOKIE[$cookie_idade], $_COOKIE[$cookie_pet]);
            echo "<br>" . $utilizador->apresentacao();
        ?>
        
    </body>
</html>

