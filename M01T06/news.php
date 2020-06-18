<?php
class Posts
{
    public $title = "";
    public $post = "";
    public $date = "";

    public function postNews($title, $post, $date){
        echo"<b>$title</b> <br>";
        echo"{$post} <br> <i>Publicado: {$date}</i>";
    }
}

