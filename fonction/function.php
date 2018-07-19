<?php


$phrase = 'Bonjour, voici une phrase';
$nombreDeCaracteres = strlen($phrase);
echo "Il y a " . $nombreDeCaracteres . ' caractères dans cette phrase.';

$phrase2 = 'Bonjour, voici une phrase un peu plus longue';
$phraseMelangee = str_shuffle($phrase);
echo str_shuffle($phrase);

echo date('y');


function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël');
?>
