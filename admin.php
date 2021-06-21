<?php
session_start();
require_once('managers.php');

$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Page admin</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="login.php" method="POST">
                <h1 class="title">Connexion</h1>
                <input name="nom" type="text" placeholder="Nom d'utilisateur" required>
                <input name="mdp" type="password" placeholder="Mot de passe" required>
                <button class="btnvalid" type="submit">Valider</button>
            </form>
        </div>
    </div>
</body>
</html>