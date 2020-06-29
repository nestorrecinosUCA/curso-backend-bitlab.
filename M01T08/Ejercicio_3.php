<?php
/*La funcion recibe como parametro un arreglo numerico. Dentro de la funcion 
existe una variable inicializada en 1, la cual se irà multiplicando por cada
valor del arreglo, mientras este se va iterando, al final se devuelve el valor
final de cada multiplicacion.*/ 
    function multiply($numbers){
        $finalValue = 1;
        for ($i=0; $i < count($numbers); $i++) { 
            $finalValue *= $numbers[$i]; 
        }
        
        echo"La multiplicacion final de todos los datos es $finalValue <br>";
        return;
    }
    $numbers1 = [1,5,32,8,1,7,4,9,0];
    $numbers2 = [7,3,6,4,5,5,5,1,2,9];
    $numbers3 = [5,9,3,76,2,1,2];

    multiply($numbers1);
    multiply($numbers2);
    multiply($numbers3);
?>