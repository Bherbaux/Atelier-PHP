<?php

class PetiteRoue
{
    private $jour = 1;

    public function avanceDUnJour(){
        $this->setJour($this->jour+1);
    }

    public function setJour($jour)
    {
        if ($jour > 10){
            $this->jour = 1;
        }else{
            $this->jour = $jour;
        }
    }

    public function getJour()
    {
        return $this->jour;
    }
}
