<?php
require_once('managers.php');

$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout.css">
    <title>Modifier un logements</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
        <form action="appel.php?action=reservation&id=<?= $_GET['id']; ?>" method="POST">
                <h1 class="title">Êtes vous sur de vouloir réserver ?</h1>

                <input type="hidden" name="id_hebergement">

                <select class="champs" name="disponible">
                    <option value="non">Oui</option>
                    <option value="oui">Non</option>
                </select>
                
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
</body>
</html>