<?php
$pattern = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Exercice 1 User</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <?php
      if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        if (preg_match($pattern, $_POST['firstName']) && preg_match($pattern, $_POST['lastName'])) {
          ?>
        <p>Ravi de vous revoir  <?= $_POST['firstName'] . '  ' . $_POST['lastName'] . ' ! ' ?></p>
        <a href="index.php">retour au formulaire</a><?php
      } else {
        ?>
        <p>Merci de rentré un nom correct</p>
        <a href="index.php">retour au formulaire</a>
        <?php
      }
    } else {
      ?> <p>Si tu retouche au code je te retrouverais...</p>
      <a href="index.php">retour au formulaire</a><?php
    }
    ?>
  
  </body>
</html>

