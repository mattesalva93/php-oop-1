<?php
class Movie {
    private $titolo;
    private $regista;
    private $genere;
    
    public function __construct($_titolo,$_regista,$_genere){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
    }

    public function getMovie() {
        return "{$this->titolo} {$this->regista} {$this->genere}";
    }

}
