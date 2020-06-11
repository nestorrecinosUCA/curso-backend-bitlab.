<!-- Desarrolla un simulador de conteo de ovejas para ayudar a dormir; ten en cuenta lo
siguiente:
a. Debe iniciar en 1 e ir incrementando.
b. Debe imprimir cada ovejita (“1 ovejita”, “2 ovejitas”... ojo con los plurales).
c. Debe contar hasta un número previamente establecido de forma aleatoria, mayor
que 20 y menor que 35. (Deberás investigar cómo obtener números aleatorios con
PHP).
d. Al finalizar, el programa deberá imprimir “.zZ .zZ .zZ” -->

<?php 
    //Making the random number
    $randomNumber = rand(20,35);

    for ($i = 1; $i <= $randomNumber; $i++){
        if($i == 1)
            echo $i . " ovejita <br>";
        else
            echo $i . " ovejitas <br>";
    }
    
    echo".Zz .Zz .Zz";
?>
