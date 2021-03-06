<?php
session_start();
require("fonction/hote.php");
if(!isconnected()){
   header("location: admin.php");
exit(); 
}
require_once('managers.php');
require 'hebergement.php';
$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");
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
            <form action="appel.php?action=ajouter" method="POST">
                <h1 class="title">Ajouter un logement</h1>

                <input class="champs" type="text" name="titre" placeholder="Nom du logement">

                <select class="champs" name="ville">
                    <option>--Choisissez une ville--</option>
                    <option value="paris">Paris</option>
                    <option value="rome">Rome</option>
                    <option value="athnène">Athènes</option>
                    <option value="madrid">Madrid</option>
                    <option value="lisbonne">Lisbonne</option>
                </select>

                <input class="champs" type="number" name="prix" min="0" max="6000" placeholder="Prix">

                <select class="champs" name="style">
                    <option>--Choisissez un logement--</option>
                    <option value="villa">Villa</option>
                    <option value="maison">Maison</option>
                    <option value="appartement">Appartement</option>
                    <option value="chambre">Chambre d'hôtel</option>
                </select>

                <input class="champs" type="file" name="photo">

                <textarea class="champs" name="bio" rows="5" cols="33" placeholder="description du logement"></textarea>

                <input class="champs2" type="number" name="chambre" min="0" max="7" placeholder="nombre de couchages">

                <input class="champs2" type="number" name="salle_de_bain" min="0" max="5" placeholder="nombre de salle de bain">

                <select class="champs" name="disponible">
                    <option>--Le logement est il disponible ? --</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
                
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>