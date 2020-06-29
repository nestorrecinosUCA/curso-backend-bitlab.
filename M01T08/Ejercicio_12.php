<?php
/*En esta funcion, hay 2 arreglos, a traves de dos iteraciones se evalua si
se encuentran similitudes entre elementos de los arreglos, luego, devuelve la
posicion en la cual se encuentran las similitudes, aqui no hay problema siempre
y cuando los arreglos sean del mismo tipo.*/
    function findSimilars($arr1, $arr2){
        
        for ($i=0; $i < count($arr1); $i++) { 
            for ($j=0; $j < count($arr2); $j++) { 
                if($arr1[$i] == $arr2[$j]){
                    echo"La posicion $i del primer arreglo coincide con la 
                         posicion $j del segundo arreglo. <br>";
                }
            }
        }
        echo"<br>";
        return;
    }

    $arrChar1 = ['a', 'b', 'c', 'd','e','f'];
    $arrChar2 = ['h','o','l','a','g','e','n','t','e','f'];
    $arrNumbers1 = [1,2,3,4,5,6,7,8,9];
    $arrNumbers2 = [1,4,10,23];
    $arrCapLetters1 =['A','B','F','G','J'];
    $arrCapLetters2 =['H','A','P','P','Y'];

    findSimilars($arrChar1, $arrChar2); echo"<br>";
    findSimilars($arrNumbers1, $arrNumbers2); echo"<br>";
    findSimilars($arrCapLetters1, $arrCapLetters2);
?>