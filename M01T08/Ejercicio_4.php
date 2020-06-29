<?php
/*La funcion recibe3 parametros, un numero cualquiera y dos numeros que marcan
un rango, se evalua si el numero es menor o igual que el valor mas corto del
rango y si es menor o igual al valor mas grande del rango, si esto se cumple,
devuelve que si esta en el rango, de lo contrario dice que no esta.*/
    function rangeN($number, $rangeStart, $rangeEnd){
        if($number >= $rangeStart && $number <= $rangeEnd){
            echo "$number esta en el rango de $rangeStart y $rangeEnd <br>";
        }else{
            echo"$number no esta dentro del rango $rangeStart - $rangeEnd <br>";
        }
        return 0;
    }

    //Calling the function
    rangeN(14, 12, 20);
    rangeN(10, 1, 10);
    rangeN(12, 21, 30);

?>