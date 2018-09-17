<?php
    $ficheiro = "Recursos/teste.txt";
    $fp = fopen($ficheiro, "w");
    fprintf($fp,"Hello wold!<br>");
    fclose($fp);
    
    $fappend = fopen ($ficheiro, "a");
    fprintf($fappend, "Hello Andre!");
    fclose($fappend);
    
    $fRead = fopen($ficheiro, "r");
    echo fread($fRead,100);
    fclose($fRead);
?>

