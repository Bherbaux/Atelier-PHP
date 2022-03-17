<?php

require_once "vendor/autoload.php";

echo "saisir un code département";
$codeDepartement = readline();

// https://geo.api.gouv.fr
$api = new \GuzzleHttp\Client (['base_uri' => 'https://geo.api.gouv.fr']);

// /communes?codeDepartement
$appel_api = $api->request('GET','/communes',
    ['query' => ['codeDepartement' => $codeDepartement] ] );

$reponse = $appel_api->getBody();

var_dump(json_decode($reponse)[0]->nom);