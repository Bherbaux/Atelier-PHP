<?php

require_once "Vehicule.php";

class Voiture extends Vehicule
{
    private $cylindree;

    /**
     * @return mixed
     */
    public function getCylindree()
    {
        return $this->cylindree;
    }

    /**
     * @param mixed $cylindree
     */
    public function setCylindree($cylindree): void
    {
        $this->cylindree = $cylindree;
    }

    public function __toString(){
         return sprintf("%s Cylindrée %s\n", parent::__tostring(), $this->cylindree);
    }

    public function saisieClavier()
    {
        parent::saisieClavier(); // TODO: Change the autogenerated stub

        echo "Saisir une cylindrée";
        $this->setCylindree(readline());
    }
}