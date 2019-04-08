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
    <p>
      <?php
      if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
        if (preg_match($pattern, $_GET['firstName']) && preg_match($pattern, $_GET['lastName'])) {
          echo 'Ravi de vous revoir ' . $_GET['firstName'] . '  ' . $_GET['lastName'] . ' ! ';
        } else {
          echo 'Merci de rentré un nom correct';
        }
      } else {
        echo 'Si tu retouche au code je te retrouverais...';
        ?>
        <a href="index.php">retour au formulaire</a>
        <?php
      }
      ?>
    </p>
  </body>
</html>

