<?php 
require_once __DIR__."/classes/Movie.php";

$catalogo = [
    new Movie("titolo1", "regista1", "genere1"),
    new Movie("titolo2", "regista2", "genere2"),
    new Movie("titolo3", "regista3", "genere3"),
    new Movie("titolo4", "regista4", "genere4")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <?php
        foreach($catalogo as $movie){
            echo "<div style='text-align:center'>
                {$movie->getMovie()}
            </div>";
        }
        ?>
</body>
</html>