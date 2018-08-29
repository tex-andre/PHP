<?php
    $directoria = "Recursos\\teste.txt";
    $file = fopen($directoria, "w");
    if(!$file){
        echo "Erro a aceder a ficheiro";
    }
    fprintf($file, "Hello world!");
    echo "Ficheiro \"$directoria\"<br>"
         ."Tamanho: " . filesize($directoria) . " bytes.<br>";
    
    fclose($file);
?>

