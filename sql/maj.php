<?php
try
{
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'arbeit1234');
}
catch(Exception $e)
{
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');
$i=1 ; 
while ($donnees = $reponse->fetch())
{
	echo $i . ':' . $donnees['nom_maj'] . '<br />';
	$i=$i+1 ;  
}


$reponse->closeCursor();




?>
