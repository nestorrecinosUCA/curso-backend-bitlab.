<?php
/*En esta funcion se recibe un parametro, el precio, este es evaluado
cambiandolo a un flotante con dos decimales.*/
    function converter($price){
        $fNumber = number_format($price,2,'.',',') ;
        
       //round($price,5);
        echo"El numero limpio es: " .$fNumber . "<br>";
        return 0;
    }



    $priceOne = 12900;
    $priceTwo = 500;
    $priceThree = 123;

    converter($priceOne);
    converter($priceTwo);
    converter($priceThree);

?>