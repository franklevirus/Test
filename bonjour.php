<?php include("menu.php"); ?>
<?php include("entete.php"); ?>
<p> Bonjour
  <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
    {
    	for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
    	{
    		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
    	}
    }
    else
    {
       echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
    }
?>
 </p>
