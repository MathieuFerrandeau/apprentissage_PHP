<?php
// On démarre la session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form  method="post" action="minichat_post.php">

            <p class="formulaire">
                <label>Pseudo : <input type="text" name="pseudo" <?php if (isset($_SESSION['pseudo']))
                 {
                    echo 'value="' . $_SESSION['pseudo'] . '"';
                }  ?>/></label>
            </p>

            <p class="formulaire">
                <label>Message : <input type="text" name="message" /></label>
            </p >

            <p class="formulaire">
                <input type="submit" />
            </p>

        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }
            $reponse = $bdd->query('SELECT pseudo, message, DAY(date_ajout) AS jour,
                                            MONTH(date_ajout) AS mois,
                                            YEAR(date_ajout) AS annee,
                                            HOUR(date_ajout) AS heure,
                                            MINUTE(date_ajout) AS minute
                                    FROM minichat ORDER BY id DESC LIMIT 10');
            while ($donnees = $reponse->fetch())
            {
            ?>
                <div class="messages">
                    <p class="auteur">
                        <strong> <?php echo $donnees['pseudo'] ?> </strong>
                        <i class="date"><?php echo "le " . $donnees['jour'] . "/" .  $donnees['mois'] . "/"
                            .  $donnees['annee'] . " à " . $donnees['heure'] . "h" . $donnees['minute']  ?></i>
                    </p>
                    <p class="msg">
                        <?php echo $donnees['message'] ?>
                    </p>
                </div>
            <?php
            }
            $reponse->closeCursor();
        ?>

    </form>


    </body>
</html>
