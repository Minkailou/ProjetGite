<?php

require_once("connexion.php");

$titre=addslashes(htmlspecialchars($_POST['titre']));
$ville=htmlspecialchars($_POST['ville']);
$prix=htmlspecialchars($_POST['prix']);
$style=htmlspecialchars($_POST['style']);
$photo=htmlspecialchars($_POST['photo']);
$description=addslashes(htmlspecialchars($_POST['bio']));
$chambre=htmlspecialchars($_POST['chambre']);
$bain=htmlspecialchars($_POST['salle_de_bain']);



$sql = "INSERT INTO hebergement (titre, ville, prix, style, photo, bio, chambre, salle_de_bain) VALUE('$titre', '$ville', $prix, '$style', '$photo', '$description', $chambre, $bain)";
$rs = $bdd->prepare($sql);
$rs->execute();


echo ("<script LANGUAGE='JavaScript'>
window.alert('Ajout effectué');
window.location.href='dashboard.php';
</script>");