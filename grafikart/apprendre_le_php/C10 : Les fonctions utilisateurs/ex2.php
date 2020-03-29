<?php

function demanderCreneau($ouverture, $fermeture, $passage) : string
{
   if($passage < $ouverture || $passage >= $fermeture)
   {
       return 'C\'est ferme!';
   }
   return 'Ouvert';
}

$creneau = demanderCreneau(8, 18, 12);

var_dump($creneau);