<?php
    $a = 34;
    $b = &$a;
    echo "a: $a<br>b: $b<br>";
    
    $a = 24;
    echo"<br>";
    echo "a: $a<br>b: $b<br>";
    
    $b++;
    echo"<br>";
    echo "a: $a<br>b: $b<br>";
?>

