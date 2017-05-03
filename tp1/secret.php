<!DOCTYPE html>
<html>
    <head>
      <title> Code d acces au serveur central de la NASA </title>
    </head>
    <body>
        <?php
          if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "kangourou")
          {
          ?>
              <h1> Voici les Codes d acces: </h1>
              <p><strong> CRGDH-HDGSV-KJSDJH-JDJDJ-SHAJHSOJ-JLDWN</strong></p>
              <p>
                Cette page est reservé juste au personnel de la NASA. </br>
                Les codes d acces peuvent changer chaque jour, donc visitez constamment la page </br>
              </p>
              <?php
            }
            else {
              echo '<p> Mot de passe incorrect </p>' ;
            }
            ?>
    </body>

</html>
