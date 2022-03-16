<?php

$nombreHazard = random_int(1,100);

echo "saisir un entier entre 1 et 100";
$entierSaisie = readline();

while ($nombreHazard != $entierSaisie){

    if ($nombreHazard < $entierSaisie){
        echo "Trop haut\n";
    }
    if ($nombreHazard > $entierSaisie){
        echo "Trop bas\n";
    }

    echo "saisir un entier entre 1 et 100";
    $entierSaisie = readline();
}

echo "Gagné !";
