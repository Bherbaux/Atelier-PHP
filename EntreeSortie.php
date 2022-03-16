<?php

$tableau = [];

for ($i = 0; $i < 5; $i++)
{
    echo "Entrez un nombre";

    $entier = readline();

    // array_push($tableau,$i,$entier);
    $tableau[] = $entier;
}

print_r($tableau);
