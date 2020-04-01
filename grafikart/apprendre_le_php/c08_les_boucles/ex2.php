<?php

/*
 * Un utilisateur rentre les céneaux d'ouverture d'un magasin
 * Un utilisateur rentre une heure et on lui dit si le magasin est ouvert
 */

$horaireOuverture = (int)readline('Entrer l\'horaire d\'ouverture : ' );
$horaireFermeture = (int)readline('Entrer l\'horaire de fermeture : ' );


while ($horaireOuverture >= $horaireFermeture)
{
    echo 'L\' horaire d\'ouverture est supérieur à l\'heure de fermeture, veuillez renseigner des horaires valides.' . "\n";
    $horaireOuverture = readline(' Entrer l\'horaire d\'ouverture : ' );
    $horaireFermeture = readline('Entrer l\'horaire de fermeture : ' );
}

$verifHoraire = (int)readline('Entrer une heure pour savoir si le magasin est bien ouvert : ');

if ($verifHoraire < $horaireOuverture || $verifHoraire >= $horaireFermeture)
{
    echo "Le magasin est fermé, revenez entre $horaireOuverture heures et $horaireFermeture heures.";
}
else
{
    echo 'C\'est ouvert !';
}

