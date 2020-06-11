<!--La misma empresa encuestadora requiere que le ayudemos a encontrar las
edades dentro de un arreglo. Al final del conteo, el programa debera de 
imprimir las edades encontradas con sus correspondientes frecuencias-->
<?php
$fifteen=0; $thirty=0; $twenty=0; $fortyfive=0; $twnthree=0; $twnone=0;
$ages = [15, 30, 20, 45, 23, 23, 45, 20, 30, 15, 20, 21, 30];
echo "El numero de personas encuestadas es: " . count($ages) . "<br>";
for($i = 0; $i <= (count($ages)-1); $i++){
    if ($ages[$i] == 15)
        $fifteen++;
    else if ($ages[$i] == 30)
        $thirty++;
    else if ($ages[$i] == 20)
        $twenty++;
    else if ($ages[$i] == 45)
        $fortyfive++;
    else if ($ages[$i] == 23)
        $twnthree++;
    else if ($ages[$i] == 21)
        $twnone++;
}
echo "Rangos de edades: <br>
    15 años: $fifteen <br>
    20 años: $twenty <br>
    21 años: $twnone <br>
    23 años: $twnthree <br>
    30 años: $thirty <br>
    45 años: $fortyfive
";
?>