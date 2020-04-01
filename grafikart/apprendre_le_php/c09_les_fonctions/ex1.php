<?php
// Filtre à insulte

$insultes = ['merde', 'con'];

$phrase = readline('Votre phrase : ');

foreach ($insultes as $insulte)
{
    $replace = str_repeat('*', strlen($insulte));
    $phraseFiltrée = str_replace($insultes, $replace, $phrase);

}

echo $phraseFiltrée;