<?php
/*Hay 2 parametros, el caracter y el arreglo de caracteres, el bucle recorre
todo el arreglo hasta encontrar una similitud en el arreglo, si lo encuentra,
lo hace saber, si no encuentra ninguno, dice que no encontro en el array.*/
function foundChar($arr, $charOne){
    $existing = 0; $notExisting = 0;
    for($i = 0; $i < count($arr); $i++){
        if($charOne == $arr[$i])
            $existing = $charOne;
        else
            $notExisting = $charOne;
    }
    if($existing)
        echo"El caracter $existing pertenece al arreglo. <br>";
    else
        echo"El caracter $notExisting no pudo ser encontrado en el arreglo.<br>";

    return 0;
}

$arrOne = ['A', 'b', 'C', 'd', 'J', 'i', 'Z'];
//Calling the function
    
    foundChar($arrOne, 'A');
    foundChar($arrOne, 'Z');
    foundChar($arrOne, 'f');

?>