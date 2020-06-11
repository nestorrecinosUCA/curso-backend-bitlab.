<?php
    $word = "Electroencefalografista";
    echo "Caracteres pares: ";
    for($i = 0; $i <= strlen($word) - 1; $i += 2){
        echo $word[$i];
    }
    echo "<br> Caracteres impares: ";
    for ($j= 1; $j < strlen($word); $j += 2) { 
        echo $word[$j];
    }
?>