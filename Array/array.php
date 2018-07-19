<?php

$prenoms [0] = 'Mathieu';
$prenoms [1] = 'Marie';
$prenoms [2] = 'Arnold';

$nom = array('izi', 'money', 'depuis');
echo $prenoms[1];
echo  print_r($nom);

$personne = array('nom' => 'Ferrandeau', 'prenoms' => 'Mathieu', 'age' => 25);

$coordonnees = array (
   'prenom' => 'François',
   'nom' => 'Dupont',
   'adresse' => '3 Rue du Paradis',
   'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
   echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>
