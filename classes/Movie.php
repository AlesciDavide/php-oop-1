<?php 

class Movie{
    
    public $titolo;
    public $genere;
    public $durata;

    public function __construct($titolo, $genere, $durata){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->durata = $durata;
    }

    
    public function TimeToHours() {
        $hours = floor($this->durata / 60);
        $minutes = $this->durata % 60;
        return "$hours ore e $minutes minuti";
    }
}