<?php
require_once('connexion.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Suppression ?</title>
</head>
<body>
<div class="card2">
             <h2>Supprimer le logement ?</h2>
             <form class="content2" action="delete.php" method="POST">
               <fieldset>
                    <input type="hidden" name="id_hebergement" value="<?php echo $id ?>">
                 <button class="supprimer" type="submit">Supprimer</button>
               </fieldset>
             </form>
             <button class="retour"><a href="dashboard.php?">Annuler</a></button>
        </div>
</body>
</html>