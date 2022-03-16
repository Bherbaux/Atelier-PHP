<?php

echo "Saisir un numéro de tél\n";
$numTel = readline();

if (Preg_match('/([0-9]{2}).([0-9]{2}).([0-9]{2}).([0-9]{2}).([0-9]{2})/', $numTel)){
    echo "Num ok\n";
}
else{
    echo "Num pas ok\n";
}

echo "Saisir une adresse et code postal\n";
$adresseZip = readline();

if (Preg_match('/([0-9]{1,3})(.*)([0-9]{5})/', $adresseZip)){
    echo "Adresse ok\n";

    $adresse = preg_split('/(.*)([0-9]{5})/', $adresseZip,-1, PREG_SPLIT_DELIM_CAPTURE)[1];
    $zip = preg_split('/(.*)([0-9]{5})/', $adresseZip,-1, PREG_SPLIT_DELIM_CAPTURE)[2];
    echo $adresse."\n";
    echo $zip."\n";

}
else{
    echo "Adresse pas ok\n";
}

echo "Saisir un IBAN\n";
$iBan = readline();

if (Preg_match('/([A-Z]{2})(.{25})/', $iBan)){
    echo "Iban ok\n";
}
else{
    echo "Iban pas ok\n";
}

echo "Saisir un Nom,Prenom,age\n";
$nomPrenomAge = readline();

if (Preg_match('/([A-Z]{1})([a-z]*),([A-Z]{1})([a-z]*),([0-9]{1,3})/', $nomPrenomAge)){
    echo "Nom,Prénom,age ok\n";

    $nom = preg_split('/(.*),(.*),(.*)/', $nomPrenomAge,-1, PREG_SPLIT_DELIM_CAPTURE)[1];
    $prenom = preg_split('/(.*),(.*),(.*)/', $nomPrenomAge,-1, PREG_SPLIT_DELIM_CAPTURE)[2];
    $age = preg_split('/(.*),(.*),(.*)/', $nomPrenomAge,-1, PREG_SPLIT_DELIM_CAPTURE)[3];
    echo $nom."\n";
    echo $prenom."\n";
    echo $age."\n";

}
else{
    echo "Nom,Prénom,age pas ok\n";
}


