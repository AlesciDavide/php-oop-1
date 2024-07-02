<?php
require_once __DIR__ . '/Generi.php';

class Generi {
    public $genereUno;
    public $genereDue;
    public $genereTre;


    public function __construct($genereUno, $genereDue, $genereTre){
        $this->genereUno = $genereUno;
        $this->genereDue = $genereDue;
        $this->genereTre = $genereTre;

    }
}