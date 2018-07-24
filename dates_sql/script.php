<?php
/*
SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00' / écupérer tous les messages dont la date est comprise entre 2010-04-02 00:00:00 et 2010-04-18 00:00:00
SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02'  //  vous renverra la liste des messages postés le 02/04/2010 (2 avril 2010)
SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22' // Cela vous renverra la liste des messages postés le 02/04/2010 à 15h28min22s.

SELECT pseudo, message, DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS annee, HOUR(date) AS heure, MINUTE(date) AS minute, SECOND(date) AS seconde FROM minichat
<?php
echo $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'] . '...';
?>

SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat // La fonctionDATE_FORMATvous permet d'adapter directement la date au format que vous préférez.

SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat
//Le champdate_expirationcorrespond à « la date de l'entrée + 15 jours ». Le mot-cléINTERVALne doit pas être changé ; en revanche, vous pouvez remplacerDAYparMONTH,YEAR,HOUR,MINUTE,SECOND, etc. Par conséquent, si vous souhaitez indiquer que les messages expirent dans deux mois :
SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat




*/
 ?>
