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

// database film
$db = [
    new Movie("Harry Potter and the Philosopher's Stone", 'Chris Columbus', 152, 'Fantasy', ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint']),
    new Movie("The Lord of the Rings: The Fellowship of the Ring", 'Peter Jackson', 178, 'Fantasy', ['Elijah Wood', 'Ian McKellen', 'Viggo Mortensen']),
    new Movie("Star Wars: Return of the Jedi", 'George Lucas', 131, 'Fantasy', ['Mark Hamill', 'Harrison Ford', 'Carrie Fisher'])
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>
<body>

<div class="container d-flex my-3">
    <?php foreach($db as $movie): ?>
    <div class="card mx-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php $movie->printName() ?></h5>
            <h6 class="card-subtitle mb-4 text-body-secondary"><?php $movie->printInfos() ?></h6>
            <div><?php $movie->printActors() ?></div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
    
</body>
</html>