<?php

class Movie {
    public $name;
    public $director;
    public $length;
    public $genre;
    public $actors = [];

    function __construct($_name, $_director, $_length, $_genre, $_actors) {
        $this->name = $_name;
        $this->director = $_director;
        $this->length = $_length;
        $this->genre = $_genre;
        $this->actors = $_actors;
    }

    // funzione per aggiungere attore nell'array di attori
    public function addActor($_actor) {
        $this->actors[] = $_actor;
    }

    // funzione per stampare titolo film
    public function printName() {
        echo $this->name;
    }

    // funzione per stampare informazioni film (tranne titolo e attori)
    public function printInfos() {
        echo '<br>Diretto da: ' . $this->director . '<br>Lunghezza: ' . $this->length . 'min' . '<br>Genere: ' . $this->genre;
    }

    // funzione per stampare lista attori
    public function printActors() {
        $list = '<h6>Attori:</h6> <ul>';

        foreach($this->actors as $actor) {
            $list .= "<li>$actor</li>";
        }

        $list .= '</ul>';

        echo $list;
    }

}