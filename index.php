<?php 

require_once __DIR__ . '/classes/Movie.php';


$aFilm = new Movie("Pirati dei caraibi: la maledizione della prima luna", "Azione", 143);

$bFilm = new Movie("Deadpool & Wolverine", "Azione", 127);

var_dump($Movie);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <article class="article">
            <h2>
                Titolo: <?php echo $aFilm->titolo?>
            </h2>
            <h3>
                Genere: <?php echo $aFilm->genere?> 
            </h3>
            <h3>
                durata: <?php echo $aFilm->TimeToHours()?>
            </h3>
            
        </article>

    </section>
</body>
</html>