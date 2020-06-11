<!--Crea un programa que tome un entero y que sume sus dígitos. Por ejemplo, si
tomamos el entero 1986, la suma de sus dígitos es 1+9+8+6 = 24.-->
<?php
    $number = 9384747326; //Suma 14
    $number = (string) $number;
    $suma = 0;
    echo "Numero: $number <br> Suma: ";
    for($i = 0; $i <= strlen($number) - 1; $i++){
        (integer) $i;
        $suma += $number[$i];
    }
    echo $suma;

?>