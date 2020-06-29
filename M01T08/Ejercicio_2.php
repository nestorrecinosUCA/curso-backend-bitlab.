<?php
/* La funcion recibe un parametro, el cual es un arreglo de numeros, luego, existe
una variable que va guardando el numero sumado a traves de un bucle que va 
iterando desde el primer termino hasta el ultimo del arreglo y al final devuelve
la suma total de todos los elementos del arreglo. */
    function sumNumbers($data){
        $finalSum = 0;
        for($i = 0; $i < count($data); $i++){
            $finalSum += $data[$i];
        }
        echo "La suma final es = $finalSum <br>";

        return;
    }

    $numbers = [1,2,3,4,5,6,7,8,9,10,100];
    $numbers2 = [0,9,4,4,5,14,7,8,12,34,100];
    $numbers3 = [99,2,0,4,33,2,12,84,9,11,14];

    sumNumbers($numbers);
    sumNumbers($numbers2);
    sumNumbers($numbers3);
    
?>