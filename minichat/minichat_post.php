<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'arbeit1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// insertion du message a l aide d une requete preparé
$req = $bdd->prepare(' INSERT INTO minichat(pseudo, message, date_minichat) VALUES(?,?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

//redirection du visiteur vers la page du minichat
header('Location: minichat.php')

?>
