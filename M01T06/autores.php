<?php
class Creators{
    public $name = "";
    public $lastname = "";
    public $age;
    public $genre = "";
    public $country = "";

    public function describeCreator($name, $lastname, $country){
        echo"<b>Reseña por:</b> $name $lastname/$country <hr>";
    }
}

?>