<!--Desarrollar un programa que, utilizando un bucle, eleve un número dado
a una potencia dada y que vaya imprimiendo el resultado tras cada iteración.-->
<?php
    $num = 5;
    $pot = 3;
    for($i = 1; $i <= $num; $i++){
        $result = ($i ** $pot);
        echo "{$i}^{$pot}: $result <br>";
    }
?>