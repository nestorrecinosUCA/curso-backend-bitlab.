<!-- Imprimir todo el alfabeto. En cada línea, deberá imprimir una letra, en minúscula y en
mayúscula, por ejemplo:
a A
b B
c C -->
 <?php
    //Array for capital letters
    $mayuscula = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
                  'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
                  'Y', 'Z'];
    //Array for small letters
    $minuscula = ['a', 'b', 'c', 'd', 'e', 'f','g', 'h', 'i', 'j', 'k', 'l',
                  'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
                  'y', 'z'];

    for($i = 0; $i < count($mayuscula); $i++){
            echo "{$minuscula[$i]} {$mayuscula[$i]}";
        echo"<br>";
    }

 ?>