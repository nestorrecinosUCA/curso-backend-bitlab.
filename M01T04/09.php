<!--Una empresa encuestadora requiere que desarrolles un programa que sea capaz de
encontrar, basado en un arreglo de respuestas cerradas (SÍ y NO), el porcentaje de cada
una de estas respuestas. El programa de imprimir:
a. El total de respuestas en el arreglo.
b. La frecuencia de respuestas SÍ.
c. El porcentaje de respuestas SÍ.
d. La frecuencia de respuestas NO.
e. El porcentaje de respuestas NO.-->
<?php
$answers = ['SI', 'NO', 'SI', 'SI', 'SI', 'NO', 'NO', 'SI', 'NO'];
echo "Numero de respuestas: " . count($answers) . "<br>";
$counterSI = 0; $counterNO = 0;
for($i = 0; $i <=  count($answers) - 1; $i++){
    if($answers[$i] == 'SI')
        $counterSI++;
    else
        $counterNO++;
}

$perctgSI = ($counterSI * 100)/count($answers);
$perctgNO = ($counterNO * 100)/count($answers);
echo "$counterSI respuestas en si. <br> Porcentaje: ". round($perctgSI, 2) ."%<br>";
echo "$counterNO respuestas en no. <br> Porcentaje: ". round($perctgNO, 2) ."%<br>";
?>