<?php

function repondre($reponse) : bool
{
    if($reponse == 'oui')
    {
        return true;
    }
    return false;
}

$resultat = repondre(readline('Voulez vous continuer ?'));

var_dump($resultat);