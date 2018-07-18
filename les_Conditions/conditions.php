<?php

$age = 8;

if ($age < 12)
{
  echo 'Bonjour gamin';
}
elseif ($age == 13) {
  echo 'tu as 13 ans.';
}
else {
  echo 'Bonjour cher adulte';

}

$adulte = true;

if ($adulte) {
  echo "tu es adulte";
}
else {
  echo "tu es un môme";
}

if ($age < 12 ) {
  // code...
}

$variable = 23;

if ($variable == 23)
{
?>
<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
<?php
}


$note = 16;

if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($note == 5)
{
    echo "Tu es très mauvais";
}

elseif ($note == 7)
{
    echo "Tu es mauvais";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($note == 12)
{
    echo "Tu es assez bon";
}

elseif ($note == 16)
{
    echo "Tu te débrouilles très bien !";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !";
}

else
{
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
