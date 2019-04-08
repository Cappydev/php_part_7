<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Mon Titre</title>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="style.css" />
   </head>
   <body>
      <div>
         <h1>Exercice 1</h1>
         <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
      </div> 
      <div>
         <form method="POST" action="user.php">
            <p>
               <label for="lastName">Votre nom :</label>
               <input type="text" name="lastName" id="lastName" required />
               <br />
               <label for="firstName">Votre prénom :</label>
               <input type="text" name="firstName" id="firstName" required />
               <input type="submit" value="Envoyer" />
            </p>
         </form>
      </div>
   </body>
</html>
