<!--Crea un programa que averigüe si un número es primo o no.-->
<?php
    $number = 11;
    if ($number != 0 && $number != 1) {
        if (($number%2 != 0) || $number == 2) {
            if (($number%3 !=0) || $number == 3) {
                if (($number%5 !=0) || $number == 5) {
                    if (($number%7 !=0) || $number == 7) {
                        if (($number%11 !=0) || $number == 11) {
                            if (($number/$number && ($number/1 == $number)) == 1) {
                                echo"El numero $number es primo";
                            }else{
                                echo "El numero $number no es primo :(";
                            }
                        }else{
                            echo "El numero $number no es primo :(";
                        }
                    }else{
                        echo "El numero $number no es primo :(";
                    }
                }else{
                    echo "El numero $number no es primo :(";
                }
            }else{
                echo "El numero $number no es primo :(";
            }
        }else{
            echo "El numero $number no es primo :(";
        }
    }else{
        echo "El numero $number no es primo :(";
    }
?>
