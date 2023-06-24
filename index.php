<?php

require __DIR__ . './models/Genre.php';
require __DIR__ . './models/Movie.php';

$movies = [
    new Movie(new Genre("sci-fi"), "Matrix", 330, "./img/Matrix.jpg"),
    new Movie(new Genre("sci-fi"), "Harry Potter", 330, "./img/harry potter.jpg"),
    new Movie(new Genre("OAV"), "Demon Slayer - Kimetsu no yaiba", "120", "./img/kimetsu no yaiba.jpg")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <?php foreach ($movies as $movie) { ?>

            <div class="card">
                <h3><?= $movie->title ?></h3>
                <p><?= $movie->genre->name ?></p>
                <h4>Durata <?= $movie->duration ?>minuti</h4>
                <img class="poster" src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
            </div>


        <?php } ?>



    </div>


</body>

</html>