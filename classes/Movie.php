<?php 

class Movie{
    
    public $titolo;
    public $genere;
    public $durata;
    public static $instances = [];

    public function __construct($titolo, $genere, $durata){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->durata = $durata;
        self::$instances[] = $this;
    }

    
    public function TimeToHours() {
        if($this->durata % 60 !== 0){
            if(floor($this->durata / 60) > 1){
                $hours = floor($this->durata / 60);
                $minutes = $this->durata % 60;
                return "$hours ore e $minutes minuti";
            }else{
                $hours = floor($this->durata / 60);
                $minutes = $this->durata % 60;
                return "$hours ora e $minutes minuti";
            }

        }else{
            if(floor($this->durata / 60) > 1){
                $hours = floor($this->durata / 60);
                return "$hours ore";
            }else{
                $hours = floor($this->durata / 60);
                return "$hours ora";
            }
        }
    }

    public static function allFilms() {
        return self::$instances;
    }
}