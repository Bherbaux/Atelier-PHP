<?php

$tableau=[2,3,4];

function carres(&$t){

    // attention :
    // forech fait une copie donc pas possible ainsi
    // => il faut faire un for
    for ($i=0; $i < count($t); $i++){
        $t[$i] = $t[$i] * $t[$i];
    }

}

carres($tableau);

print_r($tableau);

// exemple
// nbr de param variables
// $nombre va etre traité comme un tableau
function nb_var_param($message,...$nombres)
{

}

nb_var_params("coucou",1,2,3,4,5);

