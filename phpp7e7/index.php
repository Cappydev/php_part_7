<?php
$pattern = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$showmsg = true;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        if (isset($_POST['gender']) && ($_POST['gender'] == 'Monsieur' || $_POST['gender'] == 'Madame')  && isset($_POST['firstName']) && isset($_POST['lastName']) && preg_match($pattern, $_POST['firstName']) && preg_match($pattern, $_POST['lastName']) && isset($_POST['download'])) {
          ?> <p>Merci de vos renseignement</p> <?php
          ?> <p><?= $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ' . $_POST['download']?> </p> <?php  
        } else{
          ?><form method="post" action="index.php">
              <select name="gender">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
              </select>
              <label for="firstName">Nom :</label><input type="text" name="firstName">
              <label for="lastName">Prénom :</label><input type="text" name="lastName">
              <input type="submit" value="Valider">
              <input type="file" value="download" name="download"> 
            </form>
          <?php
          if (!isset($_POST['gender']) || ($_POST['gender'] != 'Monsieur' && $_POST['gender'] != 'Madame')) {
            ?> <p>Veuiller choisir si vous êtes un homme ou une femme, </p> <?php
          }
          if (!isset($_POST['firstName']) || !preg_match($pattern, $_POST['firstName'])) {
            ?> <p>Veuiller entrée un nom correct avec une Majuscule </p> <?php
          }
          if (!isset($_POST['lastName']) || !preg_match($pattern, $_POST['lastName'])) {
            ?> <p>Veuiller entrer un prénom correct avec une Majuscule</p> <?php
          }
        }
        ?>
    </body>
</html>