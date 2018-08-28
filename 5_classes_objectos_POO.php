<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "5.1_Classe_Estudante.php";     // inclui conteúdo de um ficheiro com uma classe estudante
            $andre = new Estudante("Andre", "Teixeira", 20577);
            echo $andre->apresentacao() . "<br>";
            
            class Estudante_LEEC extends Estudante{ // Esta class vai herdar o conteúdo da classe Estudante
                public function intro(){
                    return $this->apresentacao() . " da Licenciatura de Eletrotecnica e de computadores.";
                }
                private function soma($num1, $num2){    //função privada da classe
                    return "A soma dos numeros ".$num1 ." e " .$num2 .": ".$num1 + $num2;
                }
            }
            $andre1 = new Estudante_LEEC("Andre", "Teixeira", 20577);
            echo $andre1->intro();
            
            // Nao e possivel executar a função soma porque ela é privada
            //echo $andre1->soma(1,2);
        ?>
    </body>
</html>
