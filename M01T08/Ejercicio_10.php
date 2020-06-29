<?php
/* Tenemos un arreglo estandar y un caracter, luego evalua si el caracter
se encuentra dentro del arreglo a traves de una iteracion, y va incrementando
uno en uno si el caracter va apareciendo otra vez dentro del arreglo, al final
devuelve las veces que aparece dentro del arreglo, si no aparece, da un 
mensaje diciendo que no pertenecia al arreglo.*/
function knownChar($arr, $charOne){
    $counterYes = 0;
    for($i = 0; $i < count($arr); $i++){
        if($charOne == $arr[$i]){
            $counterYes++;
        }
    }
    if($counterYes != 0){
        echo"El elemento $charOne pertenece al arreglo ";
        echo"y aparece en $counterYes ocasiones. <br>";
    }else{
        echo"EL elemento $charOne no pertenece al arreglo. <br>";
    }
}

    $arr = ['a', 'e', 'e', 'e', 'j', 'm', 'k', 'f', 'm', 'n', 'f'];
    //Calling the function
    knownChar($arr, 'e');
    knownChar($arr, 'i');
    knownChar($arr, 'f');
?>