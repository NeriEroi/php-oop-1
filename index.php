<?php

    class Movie {
        public $title;
        public $genre;
        public $director;

        // costruttore
        function __construct($_title)
        {
            return $this->title = $_title;
        }

        // metodo
        public function setTitle($_title) {
            if (strlen($_title) > 2) {
                $this->title = $_title;
                echo "<strong>Titolo del Film: </strong>". "<strong>$_title</strong>" . " - " . "Il film contiene più di due caratteri";
            } else {
                echo "<strong>Titolo del Film: </strong>". "<strong>$_title</strong>" . " - " . "Il film contiene NON più di due caratteri";
            }
        }
    }

    // PRIMO FILM

    // primo film = (istanza)
    $newMovie = new Movie('Gummo');

    // attributi primo film
    $newMovie->genre = 'Comedy/Drama';
    $newMovie->director = 'Harmony Korine';

    // stampa metodo primo film
    // $newMovie->setTitle('Gummo');

    // stampa oggetto = primo film
    // var_dump($newMovie);


    // SECONDO FILM

    // secondo film = (istanza)
    $secondMovie = new Movie('Nu');

    // attributi secondo film
    $secondMovie->genre = 'Drama';
    $secondMovie->director = 'Yang Ge';

    // stampa oggetto = secondo film
    // var_dump($secondMovie);
    // // stampa metodo secondo film
    // $secondMovie->setTitle('Nu');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <div class="primo_film">

            <h1>
                PRIMO FILM:
            </h1>

            <div>
                <?php var_dump($newMovie) ?>
            </div>

            <h3>
                <?php $newMovie->setTitle('Gummo') ?>
            </h3>
        </div>

        <div class="secondo_film">

            <h1>
                SECONDO FILM:
            </h1>

            <div>
                <?php var_dump($secondMovie) ?>
            </div>
            
            <h3>
                <?php $secondMovie->setTitle('Nu') ?>
            </h3>

        </div>

    </div>

</body>
</html>