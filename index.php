<?php
class Movie
{
    public $title;
    public $genere;
    public $voto;

    function __construct($title, $genere, $voto)
    {
        $this->title = $title;
        $this->genere = $genere;
        $this->voto = $voto;
    }

    public function filmAprezzato()
    {
        if ($this->voto >= 4) {
            return 'Il film ha ottime valutazioni';
        } else {
            return 'Il film non è stato aprezzato dalla critica';
        }
    }
}


$film1 = new Movie('Karate Kid', 'Azione', 4);

var_dump($film1);


echo $film1->filmAprezzato();
