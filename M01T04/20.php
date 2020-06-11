<!--Crear un programa que imprima los años bisiestos dentro de un rango de años
dado (Ej: 1986 – 2020).-->
<?php
    for ($i=1986; $i <= 2020 ; $i++) { 
        if($i%4==0){
            echo"$i es un año bisiesto <br>";
        }
    }
?>