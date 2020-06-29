<?php
/*Aqui se recibe un numero y este es convertido a moneda americana, se le asigna
el signo y devuelve el precio con el signo de dolar ya añadido.*/
    function converter($price){
        setlocale(LC_MONETARY, 'en_US');
        $fNumber = money_format('%(#10n', $price);
        echo"El precio es: " .$fNumber . "<br>";
        return 0;
    }



    $priceOne = 12900;
    $priceTwo = 500;
    $priceThree = 123;

    converter($priceOne);
    converter($priceTwo);
    converter($priceThree);

?>