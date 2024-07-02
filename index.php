<?php 

require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <?php foreach ($allMovies as $film) { ?>
        <article class="article">
            <h2>
                Titolo: <?php echo $film->titolo?>
            </h2>
            <h3>
                Genere:
                <?php foreach ($film->genere as $generi) { ?>
                    <?php echo $generi?> 
                <?php } ?>
            </h3>
            <h3>
                durata: <?php echo $film->TimeToHours()?>
            </h3>
        </article>
        <?php } ?>
    </section>
</body>
</html>