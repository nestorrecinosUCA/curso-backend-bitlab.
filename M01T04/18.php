<!--Desarrolla un programa que encuentre el mínimo común múltiplo de dos números dados.-->
<?php
    $n1 = 100;
    $n2 = 63;
    echo"Para $n1 <br>";
    while($n1 > 1){
        if ($n1%2==0) {
            echo"Mitad de $n1: " . ($n1/2) . "<br>";
            $n1 /= 2;
        }
        else if($n1%3==0){
            echo"Tercera de $n1: " . ($n1/3) . "<br>";
            $n1 /= 3;
        }
        else if($n1%5==0){
            echo"Quinta de $n1: ". ($n1/5) . "<br>";
            $n1 /= 5;
        }
        else if($n1%7==0){
            echo"Septima de $n1: ". ($n1/7) . "<br>";
            $n1 /= 7;
        }
        else if($n1%11==0){
            echo"Onceava de $n1: ". ($n1/11). "<br>";
            $n1 /= 11;
        }
        else {
            echo"Dicisible entre si mismo";
        }
    }
    echo"<br> Para $n2 <br>";
    while($n2 > 1){
        if ($n2%2==0) {
            echo"Mitad de $n2: " . ($n2/2) . "<br>";
            $n2 /= 2;
        }
        else if($n2%3==0){
            echo"Tercera de $n2: " . ($n2/3) . "<br>";
            $n2 /= 3;
        }
        else if($n2%5==0){
            echo"Quinta de $n2: ". ($n2/5) . "<br>";
            $n2 /= 5;
        }
        else if($n2%7==0){
            echo"Septima de $n2: ". ($n2/7) . "<br>";
            $n2 /= 7;
        }
        else if($n2%11==0){
            echo"Onceava de $n2: ". ($n2/11). "<br>";
            $n2 /= 11;
        }
        else{
            echo"Divisible entre sì mismo";
        }
    }
?>