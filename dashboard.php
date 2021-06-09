<?php
require_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="btnajoutcontainer">
        <div class="btnajoutwrapper">
            <a href="ajout.php" class="plus" title="ajouter un hébergement">+</a>
        </div>
    </div>
    <div class="containertitles">
        <div class="wrappertitles">
            <h1 class="titles">Disponible</h1>
            <h1 class="titles">Indisponible</h1>
        </div>
    </div>
</body>
</html>