<?php

$pdo = new PDO("sqlite:films.db");

// rechercher le genre "COMEDIE"
$statement = $pdo->query("select * from genre where nom = 'COMEDIE'");
if (! $reponse = $statement->fetch()){
    echo("Aucune occurence retrouvée\n");
}
else {
    echo $reponse['id'] . " " . $reponse['nom'] . "\n";
}

// rechercher l'id 2
$statement = $pdo->query("select * from genre where id = 2");
if (! $reponse = $statement->fetch()){
    echo("Aucune occurence retrouvée\n");
}
else {
    echo $reponse['id'] . " " . $reponse['nom'] . "\n";
}

// rechercher le genre "TEST" (inconnu)
$statement = $pdo->query("select * from genre where nom = 'TEST'");
if (! $reponse = $statement->fetch()){
    echo("Aucune occurence retrouvée\n");
}
else {
    echo $reponse['id'] . " " . $reponse['nom'] . "\n";
}

// rechercher tous les genres, triés par nom
$statement = $pdo->query("select * from genre order by nom");
if (! $reponse = $statement->fetchAll()){
    echo("Aucune occurence retrouvée");
}
else {
    var_dump($reponse);
}

