<?php
class Mov_Ser{
    public $movieBool = null;
    public $movieName = "";
    public $year;

    public $serieBool = null;
    public $serieName = "";
    public $chapNumber;
    public $season;

    public function callMovieData($movieBool,$movieName,$year){
        if($movieBool){
            echo "<br><i>$movieName/$year</i>";
        }
    }
    public function callSerieData($serieBool,$serieName,$chapNumber,$season){
        if($serieBool){
            echo"$serieName/cap. $chapNumber/temp. $season";
        }
    }
}
class Elenco{
    public $artistName = "";
    public $artistOccupation = "";
    public $artist_birthday = "";
    public function describingArtist($artistName){
        echo$artistName . "<br>";
    }
    public function birthday($artistName, $artist_birthday){
        echo"$artistName cumpleaños el $artist_birthday <br>";
    }

}



?>