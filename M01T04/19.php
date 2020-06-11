<!--19. Desarrollar un programa que tome un arreglo con nombres de libros y,
de forma aleatoria, seleccione cuáles libros debo leer. Este programa deberá
imprimir los nombres de libros a leer y los nombres de los libros que no leeré.-->
<?php
$books = [["Harry Potter", "Maze Runner", "Las Cronicas de Narnia",
          "El arte de la guerra", "El avion presidencial ha desaparecido",
          "Señor Presidente", "El Principito"],
          ["EL popolvuh", "13 Reasons why", "Narraciones extraordianrias",
           "El señor de los anillos", "Juego de tronos", "Sinsajo", "Platero y yo"]];

$toRead = [];
echo"Libros que leere: <br>";
for ($i=0; $i < count($books[0]); $i++) { 
    $selector = rand(0, 6);
    array_push($toRead, $books[0][$selector]);

}
    $all = array_unique($toRead);
    $othersAll = array_shift($all);
for ($i=0; $i < count($all); $i++) { 
    echo $all[$i] . "<br>";
}
$notToRead=[];
echo"<br>No leere: ";
for ($i=0; $i < count($books[1]); $i++) { 
    $selectorTwo = rand(0,6);
    array_push($notToRead, $books[1][$selectorTwo]);
}
    $allTwo = array_unique($notToRead);
    $othersAllTwo = array_shift($allTwo);
for ($i=0; $i < count($allTwo); $i++) { 
    echo $allTwo[$i] . "<br>";
}
?>