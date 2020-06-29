
<?php
/*La funcion me pide un numero, un arreglo de decisiones y una decision, el
numero lo que hara es marcar el final de la iteracion del arreglo y la decision
pedira que sean pares o impares, despues de esto evalua si los numeors son
pares o impares (dependiendo de la decision) y asì empieza a imprimirlos.*/
    function printNumbers($number, $arrays, $decision){
        if ($decision == 'par') {
            for($i = 0; $i < $number; $i++){
                if ($arrays[$i]%2 == 0) {
                    echo $arrays[$i]. " ";
                }
            }
        }
        if ($decision == 'impar') {
            for($i = 0; $i < $number; $i++){
                if ($arrays[$i]%2 != 0) {
                    echo $arrays[$i]. " ";
                }
            }
        }
    echo"<br>";
    return;
    }
    //Arrays
    $arr = [1,5,3,8,3,10,23,44,65,86,99,87,44,78,34,22,12,98,67,100,200];
    $arr2 = [54,23,12,78,56,54,45,43,99,76,57,45,13,29,76,58,10,35,12,36,11];
    $arr3 = [3,6,4,5,909,34,12,76,45,13,24,53,79,45,67,35,80,25,10,24];

    printNumbers(5, $arr, 'par');
    printNumbers(7, $arr2, 'impar');
    printNumbers(9, $arr3, 'par');
?>