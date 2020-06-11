<!--Desarrollar un traductor de español a código murciélago.-->
<?php
    $word = "Electricista";
    echo $word . "<br>";
    $batCode = [
        'm' => 0, 'u' => 1, 'r' => 2, 'c' => 3,
        'i' => 4, 'e' => 5, 'l' => 6, 'a' => 7,
        'g' => 8, 'o' => 9
    ];
    for ($i=0; $i < strlen($word) ; $i++) { 
        if($word[$i] == 'M' || $word[$i] == 'm')
            $word[$i] = $batCode['m'];
        else if($word[$i] == 'U' || $word[$i] == 'u')
            $word[$i] = $batCode['u'];
        else if($word[$i] == 'R' || $word[$i] == 'r')
            $word[$i] = $batCode['r'];
        else if($word[$i] == 'C' || $word[$i] == 'c')
            $word[$i] = $batCode['c'];
        else if($word[$i] == 'I' || $word[$i] == 'i')
            $word[$i] = $batCode['i'];
        else if($word[$i] == 'E' || $word[$i] == 'e')
            $word[$i] = $batCode['e'];
        else if($word[$i] == 'L' || $word[$i] == 'l')
            $word[$i] = $batCode['l']; 
        else if($word[$i] == 'A' || $word[$i] == 'a')
            $word[$i] = $batCode['a'];
        else if($word[$i] == 'G' ||  $word[$i] == 'g')
            $word[$i] = $batCode['g'];
        else if($word[$i] == 'O' || $word[$i] == 'o')
            $word[$i] = $batCode['o'];
    }
    echo $word;
?>