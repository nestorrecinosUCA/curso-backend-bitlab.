<?php
/* La funcion recibe los tres numeros, de estos evalua entre ellos cual de todos
es el mayor y cual es el menor, guardando el mayor en una variable y la menor
en otra para despues mostrarlas al usuario. */
function higherAndShorter($n1, $n2, $n3){
    
    $higher = 0; $shorter = 0;
    if($n1 > $n2 && $n1 > $n3){
        $higher = $n1;
        if($n2 > $n3){
            $shorter = $n3;
        }else{
            $shorter = $n2;
        }
    }else if($n2 > $n3 && $n2 > $n1){
        $higher = $n2;
        if($n1 > $n3){
            $shorter = $n3;
        }else{
            $shorter = $n1;
        }
    }else if($n3 > $n1 && $n3 > $n2){
        $higher = $n3;
        if($n1 > $n2){
            $shorter = $n2;
        }else{
            $shorter = $n1;
        }
    }
    echo"$higher es el numero mayor y $shorter es el numero menor. <br>";

    return;
}

//vars
higherAndShorter(5, 4, 2);
higherAndShorter(5, 15, 7);
higherAndShorter(14,12,17);
?>