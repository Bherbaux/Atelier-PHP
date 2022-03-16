<?php

include_once "PetiteRoue.php";

class GrandeRoue
{
    private $jour = 1;
    private $mapetiteRoue;

    public function __construct()
    {
        $this->mapetiteRoue = new PetiteRoue();
    }

    public function avanceDUnJour(){
        $this->setJour($this->jour+1);

        $this->mapetiteRoue->avanceDUnJour();
    }

    public function setJour($jour)
    {
        if ($jour > 15){
            $this->jour = 1;
        }else{
            $this->jour = $jour;
        }
    }

    public function setJourPetiteRoue($jour)
    {
        $this->mapetiteRoue->setJour($jour);
    }

    public function getJour()
    {
        return $this->jour;
    }

    public function afficheJourGrJourPr()
    {
        echo sprintf("GR:%d PR:%d \n", $this->getJour(), $this->mapetiteRoue->getJour());
    }
}

$maGrandeRoue = new GrandeRoue();
$maGrandeRoue->setJour(14);
$maGrandeRoue->setJourPetiteRoue(8);
$maGrandeRoue->afficheJourGrJourPr();

$maGrandeRoue->avanceDUnJour();
$maGrandeRoue->afficheJourGrJourPr();

$maGrandeRoue->avanceDUnJour();
$maGrandeRoue->afficheJourGrJourPr();

$maGrandeRoue->avanceDUnJour();
$maGrandeRoue->afficheJourGrJourPr();
