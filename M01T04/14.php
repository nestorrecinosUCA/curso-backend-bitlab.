<!--Desarrollar un traductor de español a código murciélago.-->
<?php
    $word = "D5s72296672";
    echo $word . "<br>";
    $batCode = [
        0 => 'm', 1 => 'u', 2 => 'r', 3 => 'c',
        4 => 'i', 5 => 'e', 6 => 'l', 7 => 'a',
        8 => 'g', 9 => 'o'
    ];
    for ($i=0; $i < strlen($word) ; $i++) { 
        
        if($word[$i] == '0')
            $word[$i] = $batCode[0];
        else if($word[$i] == '1')
            $word[$i] = $batCode[1];
        else if($word[$i] == '2')
            $word[$i] = $batCode[2];
        else if($word[$i] == '3')
            $word[$i] = $batCode[3];
        else if($word[$i] == '4')
            $word[$i] = $batCode[4];
        else if($word[$i] == '5')
            $word[$i] = $batCode[5];
        else if($word[$i] == '6')
            $word[$i] = $batCode[6]; 
        else if($word[$i] == '7')
            $word[$i] = $batCode[7];
        else if($word[$i] == '8')
            $word[$i] = $batCode[8];
        else if($word[$i] == '9')
            $word[$i] = $batCode[9];
    }
    echo $word;
?>