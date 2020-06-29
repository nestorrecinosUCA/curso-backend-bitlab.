<?php
/*En esta funcion, solo hay un parametro que es la palabra. hay dos variables
con las letras tanto mayusculas como minusculas, asi que dentro de un bucle
anidado se evalua si la posicion del arreglo es igual a alguna posicion dentro
de los arreglos de las letras, dependiendo de las que sea, las variables
contadoras van incrementando de uno en uno. AL final nos muestra la cantidad
de letras tanto mayusculas como minusculas dentro de la cadena de texto.*/
    function countLetters($word){
    $capitalLetters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
                       'Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $smallLetters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n',
                     'ñ','o','p','q','r','s','t','u','v','w','x','y','z'];
    $capitalCounter = 0; $smallCounter = 0;    
    for($i=0; $i < strlen($word) ; $i++){
        for ($j=0; $j < 27 ; $j++) { 
            if($word[$i] == $capitalLetters[$j])
                $capitalCounter++;
            else if($word[$i] == $smallLetters[$j])
                $smallCounter++;
        }
    }
    echo"Hay $capitalCounter mayusculas y $smallCounter minusculas en '{$word}' <br>";
    return;
    }
    
    countLetters('Hola Mundo');
    countLetters('Estoy contando Las Mayusculas y Minusculas');
    countLetters('Viva PHP');
?>