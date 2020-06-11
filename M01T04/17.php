<!--Crea un programa que imprima los números primos entre 1 y un número dado.-->
<?php
    $total = 100;
    for ($i = 1; $i <=$total ; $i++) { 
        if ($i != 0 && $i != 1) {
            if (($i%2 != 0) || $i == 2) {
                if (($i%3 !=0) || $i == 3) {
                    if (($i%5 !=0) || $i == 5) {
                        if (($i%7 !=0) || $i == 7) {
                            if (($i%11 !=0) || $i == 11) {
                                if (($i/$i && ($i/1 == $i)) == 1) {
                                    echo" $i <br>";
                                }
                            }
                        }
                    }
                }
            }
        }
    }

?>