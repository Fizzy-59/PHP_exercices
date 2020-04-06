<?php

$aDeviner = 150;

if($_GET['chiffre'] > $aDeviner)
{
    echo 'Votre chiffre est trop grand';
}
elseif($_GET['chiffre'] < $aDeviner)
{
    echo 'Votre chiffre est trop petit';
}
else
{
    echo 'Bravo ! vous avez deviné le chiffre.';
}
?>


<form action="jeu.php" method="get">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000">
    <button type="submit">Deviner </button>
</form>
