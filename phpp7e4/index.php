<?php
$patternName = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$showmsg = true;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <select name="gender">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <label for="firstName">Nom :</label><input type="text" name="firstName">
            <label for="lastName">Prénom :</label><input type="text" name="lastName">
            <input type="submit" value="Valider">
        </form>
        <?php
        if (isset($_POST['gender']) AND isset($_POST['firstName']) AND isset($_POST['lastName'])) {
          
          
          if ($_POST['gender'] == 'Monsieur' || $_POST['gender'] == 'Madame') {
          }else {
            ?> <p>Homme ou Femme svp</p> <?php
            $showmsg = false;
          }
          
          
          if (preg_match($patternName, $_POST['firstName'])) {
          } else {
            ?> <p>Nom faux</p> <?php
            $showmsg = false;
          }
          
          
          if (preg_match($patternName, $_POST['lastName'])) {              
          } else {
            ?> <p>Prénom faux</p> <?php
            $showmsg = false;
          }
          
          if ($showmsg == true) {
            ?> <p>Merci de vos renseignement</p> <?php
            ?> <p><?= $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] ?> </p> <?php  
          }
          
        } else{
          
        }
        ?>
    </body>
</html>
