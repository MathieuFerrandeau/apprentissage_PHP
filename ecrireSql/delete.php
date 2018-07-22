DELETE FROM jeux_video WHERE nom='Battlefield 1942'


$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo())); // Si la requête fonctionne, aucune erreur ne sera affichée. Si en revanche la requête plante, PHP arrêtera de générer la page et vous affichera l'erreur donnée par MySQL…
