<?php

/*Demaned à l'user de rentrer une note ou de taper fin
Chaque note est save dans un tableau : $notes
A la fin on affiche le tableau de notes sous forme de liste'*/

$notes = [];
$action = null;

while($action !== 'fin')
{
    $action = readline('Nouvelle note ou fin pour quitter : ');

    if ($action !== 'fin')
    {
        $notes[] = (int)$action;
    }
}

foreach ($notes as $note)
{
    echo "$note \n";
}