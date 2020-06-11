<!--Crea un programa que invierta un string dado. Ejemplo para el string
MESA: ASEM.-->
<?php
$word = "Nanotecnologia";
echo "Palabra: $word <br>";
for ($i = strlen($word) -1; $i >= 0; $i--) { 
    echo $word[$i];
}
?>