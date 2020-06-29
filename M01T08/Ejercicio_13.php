<?php
/*La funcion recibe un paràmetro, lo multiplica por el numero del iterador y,
a su vez, lo imprime para que el usuario pueda verlo*/
    function multiplicationTable($number){
        echo"Tabla del $number <br>";
        for($i = 1; $i <= 10; $i++){
            echo "$number x $i = " . ($number*$i) . "<br>";
        }
        echo"<br>";
        return 0;
    }

    //Calling the function
    multiplicationTable(5);
    multiplicationTable(10);
    multiplicationTable(9);

?>