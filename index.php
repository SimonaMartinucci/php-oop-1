<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';


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

<div class="container d-flex flex-wrap my-3">
    <?php foreach($db as $movie): ?>
    <div class="card mx-4 my-3" style="width: 18rem;">
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