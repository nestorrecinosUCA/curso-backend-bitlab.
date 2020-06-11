<!--Esta empresa también quiere que le ayudemos a sacar el promedio de los números,
enteros o flotantes, dentro de un arreglo dado.-->
<?php
    $numbers = [9, 6.98, 88, 90, 1, 56.7, 12.4, 77.49, 10.10];
    $sum = 0;
    for($i = 0; $i <= count($numbers) - 1; $i++){
        $sum += $numbers[$i];
    }
    $average = $sum/(count($numbers));
    echo "El promedio es: " . round($average, 2);
?>