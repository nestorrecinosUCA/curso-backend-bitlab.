<?php
/*Esta funcion tiene como parametros 2 numeros, el primero es el crucial,
el segundo, independientemente cual sea, debe de quedar mayor al primero.
Entonces, el numero dos va sumandose asi mismo hasta que es mayor y luego
se devuelve el primer numero y el segundo ya siendo mayor.*/
    function multiplyNext($num1, $num2){
        $num = 0;
        $numu = $num2; 
        while ($num1 > $num2) {
            $num2 = $num2 + $numu;
        }
        echo"Los numeros son: $num1, $num2 <br>";
        return;
    }

    multiplyNext(5,2);
    multiplyNext(100,11);
    multiplyNext(21,5);
?>