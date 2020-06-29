<?php
/*En esta funcion hay 2 parametros, una con un numero random y otra de un arreglo
luego cuenta la longitud del arreglo, entonces evalua si el numero es mayor a la
longitud del arreglo, si es asi dice que que sobrepaso el limite del arreglo
(pude ser que los arreglos tengan muchisimos numeros o no), y si esta en el rango,
imprime hasta la posicion del numero que ha sido ingresado.*/
    function showNumber($numberSelected, $arr){
        $numberSize = count($arr);
        if ($numberSelected > $numberSize) {
            echo"Sobrepaso el limite de numeros de nuestro arreglo. <br>";
        }else{
        for($i = 0; $i < $numberSelected; $i++){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";
    return;
}
$numbersArray1 = [1,2,3,4,5,6,7,8,9,0,10,11,12,13,23,45,60,98,24];
$numbersArray2 = [1,7,8,3,4,55,1000,0,12,12,12,25,3,4,78,53,2,11,34,19,23];
$numbersArray3 = [9,8,7,99 ,34,67,12,68,90,48,28,90,389,109,90,34,34,23,12,9,
                  1,7,8,3,4,55,1000,14,0];

$numberRandom = rand(0,30);
echo "Numero: " . $numberRandom . "<br>"; 
showNumber($numberRandom, $numbersArray1);
showNumber($numberRandom, $numbersArray2);
showNumber($numberRandom, $numbersArray3);
?>