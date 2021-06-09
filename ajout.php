<?php
require_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout.css">
    <title>Ajouter un logements</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            
            <form action="insert.php" method="POST">
                <h1 class="title">Ajouter un logement</h1>

                <input class="champs" type="text" name="titre">

                <select class="champs" name="ville">
                    <option value="">--Choisissez une ville</option>
                    <option value="paris">Paris</option>
                    <option value="rome">Rome</option>
                    <option value="athnène">Athnène</option>
                    <option value="madrid">Madrid</option>
                    <option value="lisbonne">Lisbonne</option>
                </select>

                <input class="champs" type="number" name="prix min="0" max="6000">

                <select class="champs" name="style">
                    <option value="">--Choisissez un logement</option>
                    <option value="villa">Villa</option>
                    <option value="maison">Maison</option>
                    <option value="appartement">Appartement</option>
                    <option value="chambre">Chambre d'hôtel</option>
                </select>

                <input class="champs" type="files" name="photo">

                <textarea class="champs" name="bio" rows="5" cols="33"></textarea>

                <div class="chambre">
                    <input class="champs2" type="number" name="chambre" min="0" max="7">
                    <input class="champs2" type="number" name="salle_de_bain" min="0" max="5">
                </div>
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>