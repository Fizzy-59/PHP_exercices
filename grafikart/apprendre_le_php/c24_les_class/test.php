<?php

require 'c24_les_class/Creneau.php';

$creneau = new Creneau(9, 12);

$creneau2 = new Creneau(14, 16);



var_dump
(
    $creneau->inclusHeure(10),
    $creneau2->inclusHeure(10),

);

var_dump
(
    $creneau->intersect($creneau2),
);


