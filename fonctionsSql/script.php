<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT COUNT(nom) AS nombre_moy, possesseur FROM jeux_video GROUP BY possesseur'); // affiche le nombre de jeux par possesseur

while ($donnees = $reponse->fetch())
{
	echo '<p>' . $donnees['nombre_moy'] . ' - ' . $donnees['possesseur'] . '</p>';
}
/*

fonctions scalaires: elles agissent sur chaque entrée. Par exemple, vous pouvez transformer en majuscules la valeur de chacune des entrées d'un champ ;

$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video'); // affiche en MAJ
$reponse = $bdd->query('SELECT LOWER(nom) AS nom_min FROM jeux_video'); // affiche en min
$reponse = $bdd->query('SELECT LENGTH(nom) AS nom_length FROM jeux_video'); // affiche le nombre de caractère
$reponse = $bdd->query SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video // arrondi une valeur décimale a X chiffre (le 2eme paramaètre ici : 2)

fonctions d'agrégat : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video'); // fait la moyenne de la colonne prix
$reponse = $bdd->query('SELECT SUM(prix) AS prix_somme FROM jeux_video'); // affiche la somme des prix
$reponse = $bdd->query('SELECT MAX(prix) AS prix_max FROM jeux_video'); // affiche le plus grand prix
$reponse = $bdd->query('SELECT MIN(prix) AS prix_min FROM jeux_video'); // affiche le plus petit prix
$reponse = $bdd->query('SELECT COUNT(*) AS ligne_total FROM jeux_video'); // compte toutes les lignes de la table
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moy, console FROM jeux_video GROUP BY console HAVING prix_moy <=10 ORDER BY prix_moy'); // va faire la moyenne de tous les prix par console et les ordonner par prix croissant seulement ceux inférieurs ou = à 10

*/
$reponse->closeCursor();

?>
