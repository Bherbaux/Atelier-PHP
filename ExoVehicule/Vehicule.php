<?php

class Vehicule
{
    protected $marque;
    protected $modele;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    public function saisieClavier()
    {
        echo "Saisir une marque";
        $this->setMarque(readline());

        echo "Saisir un modele";
        $this->setModele(readline());
    }

    public function __toString(){
        return sprintf("Marque %s , Modele %s\n", $this->marque, $this->modele);
    }

}
