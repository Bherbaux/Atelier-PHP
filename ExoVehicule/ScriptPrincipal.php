<?php

require_once "Vehicule.php";
require_once "Voiture.php";
require_once "Velo.php";

echo "test Vehicule\n";
$monVehicule = new Vehicule();
$monVehicule->saisieClavier();
echo $monVehicule;


echo "test Voiture\n";
$maVoiture = new Voiture();
$maVoiture->saisieClavier();
echo $maVoiture;

echo "test Velo\n";
$monVelo = new Velo();
$monVelo->saisieClavier();
echo $monVelo;

