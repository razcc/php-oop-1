<?php
class Movie
{
    public $title;
    public $genere;

    function __construct($title, $genere)
    {
        $this->title = $title;
        $this->genere = $genere;
    }

    public function isAdult()
    {
    }
}


$film1 = new Movie('Karate Kid', 'Azione');

var_dump($film1);
