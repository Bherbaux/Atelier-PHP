<?php

require_once "vendor/autoload.php";

echo "saisir une latitude";
$latitude = (double) readline();

echo "saisir une longitude";
$longitude = (double) readline();

// https://open-meteo.com/en/docs
$api = new \GuzzleHttp\Client (['base_uri' => 'https://api.open-meteo.com']);

$appel_api = $api->request('GET','/v1/forecast',
    ['query' => [   'latitude'  => $latitude,
                    'longitude' => $longitude,
                    'hourly'    => str_replace('%2C',',','temperature_2m') ]]);

$retour = $appel_api->getBody();

var_dump(json_decode($retour));

