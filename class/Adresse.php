<?php

class Adresse
{
    public $rue;
    public $numero;
    public $zip;
    public $localite;

    public function affiche(){
        echo sprintf("Adresse : %d %s, %s : %s", $this->numero, $this->rue, $this-> localite, $this->zip);
    }
}
