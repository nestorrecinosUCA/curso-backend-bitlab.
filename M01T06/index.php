<?php
require_once 'news.php';
require_once 'movies.php';
require_once 'registro.php';
require_once 'autores.php';
//punto1

$newD = new Posts();

//From "News.php"
$newD->title = "EL Prisionero de Azkaban";
$newD->post = "Harry Potter y el Prisionero de Azkaban es un cortometraje del
tercer libro escrito por J.K. Rowlling en el cual Harry conoce a su padrino de
quien tenia un mal concepto hasta que tiene la oportunidad de entablar conversacion
 y asì desmiente todos los rumores que lo vinculan como el asesino de sus padres.";
$newD->date = "10-10-2019";
$newD->postNews($newD->title, $newD->post, $newD->date);
//From "movies.php"
$movie = new Mov_Ser();
$movie->movieBool = true;
$movie->movieName = "Harry Potter y EL Prisionero de Azkaban";
$movie->year = 2004;
$movie->callMovieData($movie->movieBool, $movie->movieName, $movie->year);
echo"<br><b>Elenco:</b><br>";
$daniel = new Elenco();
    $daniel->artistName = "Daniel Radclife";
    $daniel->artistOccupation = "Actor";
    $daniel->artist_birthday = "12/10/1987";
    $daniel->describingArtist($daniel->artistName);
$rupert = new Elenco();
    $rupert->artistName = "Rupert Grint";
    $rupert->artistOccupation = "Actor";
    $rupert->artist_birthday = "05/09/1987";
    $rupert->describingArtist($rupert->artistName);
$ema = new Elenco();
    $ema->artistName = "Emma Watson";
    $ema->artistOccupation = "Actriz";
    $ema->artist_birthday = "10/12/1988";
    $ema->describingArtist($ema->artistName);

//Cumpleaños
    echo"<b>Cumpleaños:</b> <br>";
    $daniel->birthday($daniel->artistName, $daniel->artist_birthday);
    $rupert->birthday($rupert->artistName, $rupert->artist_birthday);
    $ema->birthday($ema->artistName, $ema->artist_birthday);

//Autores
$autor = new Creators();
    $autor->name="Nèstor";
    $autor->lastname="Recinos";
    $autor->age=18;
    $autor->genre="Hombre";
    $autor->country="El Salvador";
    $autor->describeCreator($autor->name,$autor->lastname,$autor->country);
//comentarios de visitantes
$fav = new Favourite();
$visitante = new Registro_persona();
    $visitante->name = "Irvin";
    $visitante->username = "yerving";
    $fav->favourite = true;
    $fav->markAsFav($fav->favourite);
    $visitante->email = "ir@123.com";
    $visitante->comment = "¡Me encanto la reseña, espero ver la pelicula pronto!";
    $visitante->comment($visitante->name, $visitante->username, $visitante->comment);
    $counter = 1;
//Evaluacion visitante 1
$evaluacion = new Calificacion();
    $evaluacion->number = 4;
    $evaluacion->individual($evaluacion->number);
//visitante 2
$visitante2 = new Registro_persona();
    $visitante2->name = "Luis";
    $visitante2->username = "lBonilla";
    $fav->favourite = false;
    $fav->markAsFav($fav->favourite);
    $visitante2->email = "LB@123.com";
    $visitante2->comment = "Te falto mucha informaciòn, pero esta bien.";
    $visitante2->comment($visitante2->name, $visitante2->username, $visitante2->comment);
    $counter++;
    echo$counter. " comentarios.<br>";
//Evaluacion visitante 2
    $evaluacion->number = 1;
    $evaluacion->individual($evaluacion->number);

    $evaluacion->average($evaluacion->number, $counter);


?>