<?php

require_once __DIR__ . '/../classes/Movie.php';
require_once __DIR__ . '/../classes/Generi.php';


$aFilm = new Movie("Pirati dei caraibi: la maledizione della prima luna", new Generi("Commedia", "Horror", "Avventura"), 143);

$bFilm = new Movie("Deadpool & Wolverine", new Generi("Azione", "Fantascienza", "Commedia"), 127);

$cFilm = new Movie("The Wolf of Wall Street", new Generi("Commedia", "Thriller", "Drammatico"), 180);

$dFilm = new Movie("Grand Budapest Hotel", new Generi("Commedia", "Azione", "Crimine"), 100);

$allMovies = Movie::allFilms();

