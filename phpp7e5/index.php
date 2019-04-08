<?php
$patternName = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$showmsg = true;
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Exercice 5</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
        if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName'])) {
          
          
          if ($_POST['gender'] == 'Monsieur' || $_POST['gender'] == 'Madame') {
          } else {
            ?> <p class="alert alert-danger" role="alert">Homme ou Femme svp</p> <?php
            $showmsg = false;
          }
          
          
          if (preg_match($patternName, $_POST['firstName'])) {
          } else {
            ?> <p class="alert alert-danger" role="alert">Nom faux</p> <?php
            $showmsg = false;
          }
          
          
          if (preg_match($patternName, $_POST['lastName'])) {              
          } else {
            ?> <p class="alert alert-danger" role="alert">Prénom faux</p> <?php
            $showmsg = false;
          }
          
          if ($showmsg == true) {
            ?> <p>Merci de vos renseignement</p> <?php
            ?> <p><?= $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] ?> </p> <?php  
          }
          
        } else {
          
        }
        ?>
  </body>
</html>

