<!-- Imprime los números del 1 al 100, pero debes decir si el número es par o
impar. Ejemplo: 1 es impar, 2 es par, 3 es impar-->

<?php
$i = 1;
while ($i <= 100) {
    echo $i;
    if($i%2 == 0)
        echo" es par. <br>";
    else
        echo" es impar. <br>";
    $i++;
}
?>