<?php

$pdo = new PDO("sqlite:films.db");

$pdo->exec("insert into genre (nom) values ('SF')");
$pdo->exec("insert into genre (nom) values ('WESTERN')");
$pdo->exec("insert into genre (nom) values ('COMEDIE')");


