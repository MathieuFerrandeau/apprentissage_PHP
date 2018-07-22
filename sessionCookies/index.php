<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('pseudo', 'MathieuF', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Mathieu';
$_SESSION['nom'] = 'Ferrandeau';
$_SESSION['age'] = 24;
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        Hé ! Je me souviens de toi !<br />
        Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
    </p>

    <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="monscript.php">Lien vers monscript.php</a><br />
        <a href="informations.php">Lien vers informations.php</a>
    </p>
    </body>
</html>
