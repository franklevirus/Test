<!DOCTYPE html>
<html>
    <head>
        <title> Minichat</title>
    </head>
    <body>
    <p> veulliez entrer votre pseudo et votre message svp </p>
        <form action="minichat_post.php" method="post"  >
            <p>
                <label for="pseudo"> Pseudo </label> : <input type="text" name="pseudo" id="pseudo"  /> </br>
                <label for="message">Message </label> : <input type="text" name="message"  id="message" /> </br>

                <input type="submit" value="envoyer" />
            </p>
        </form>
        <?php
        // connection a la base de donnée
        try
        {
        	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'arbeit1234');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        // Recuperation des dix derniers messages
        $reponse= $bdd->query('SELECT pseudo, message, date_minichat FROM minichat ORDER BY ID DESC LIMIT 0, 10');
        //affichage de chaque message
        while( $donnees = $reponse-> fetch())
        {
          echo '<p><strong>' .htmlspecialchars($donnees['pseudo']). '</strong> : ' . htmlspecialchars($donnees['message']) . 'crée en: ' . htmlspecialchars($donnees['date_minichat']) . '</p>';
        }
        $reponse->closeCursor();


         ?>
      </body>
  </html>
