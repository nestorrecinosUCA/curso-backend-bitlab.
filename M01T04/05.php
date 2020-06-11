<!--Crea un programa que simule la tabla de división del 2, la cual debe
ir en orden descendente del 25 al 0 y, además, debe mostrar el residuo.
Por ejemplo: 25 entre 2 es igual a 12 y me sobra 1.
24 entre 2 es igual a 12 y me sobra 0. -->

<?php
    $number = 25;
    while($number >= 0){
        $div = $number/2;
        $module = $number%2;
        echo "$number entre 2 es igual a ". (int)$div
        . " y me sobra $module <br>";
        $number--;
    }
?>