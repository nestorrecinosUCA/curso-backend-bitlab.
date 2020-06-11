<!--Nuestra empresa amiga encuestadora nos pide también que encontremos las
letras iniciales de los nombres de los encuestados. Estos nombres están también
dentro de un arreglo. Una vez tengamos las iniciales de los encuestados,
debemos imprimir cuales letras del abecedario no están incluidas en dichas
iniciales.-->
<?php
    $abecedario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
                   'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
                   'Y', 'Z'];
    $names = ['Roberto', 'Irvin', 'Luis', 'Carlos', 'Steven', 'Daniel', 'Nestor'];
    for($i = 0; $i <= (count($names) - 1); $i++){
        $inicial = (string) $names[$i];
        for ($j=0; $j < 1; $j++) { 
            $iniciales[] = $inicial[0];
        }
    }
    echo"Iniciales del abecedario que aparecen: ";
    for ($i=0; $i < count($names) ; $i++) { 
        echo $iniciales[$i] . ", ";
    }
    echo"<br>Las letras del abecedario que no aparecen son: ";
    $difference = array_diff($abecedario, $iniciales);
    print_r($difference);

?>
