<?php
/*La funcion recibe un parametro, el cual es dividido por cada iterador y
va siendo mostrado su resultado n pantalla, con 2 decimales si es que tiene.*/
    function division($number){
        echo"Tabla de division del $number: <br>";
        for($i = 1; $i <= 10; $i++){
            echo"$number / $i = " . round(($number/$i),2) . "<br>";
        }
        echo"<br>";
        return 0;
    }


    division(7);
    division(10);
    division(300);
?>