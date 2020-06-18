<?php
class Registro_persona{
    public $name = "";
    public $email = "";
    public $username = "";
    public $comment = "";
    public $autor = null;

    public function comment($name, $username, $comment){
    echo"$name <br> <small><i>@$username</i> </small> <br> $comment <br>";
    }
    public function($name, $autor){
        if($autor){
            public $name = "";
            public $email = "";
            public $username = "";
            public $comment = "";
        }
    }
}
class Favourite{
    public $favourite = null;
    function markAsFav($favourite){
        if($favourite){
            echo"<b>❤</b> ";
        }
    }
}
class Calificacion{
    public $number = 0;
    
    public function individual($number){
        echo "Evaluaciòn: $number de 5 <br>";
    }
    public function average($number, $counter){
        $total = 0;
        for ($i=0; $i < $counter; $i++) { 
            $total += $number;
              
        }
        $average = $total/$counter;
        echo "Evaluaciòn: $average de 5";


    }

}

?>