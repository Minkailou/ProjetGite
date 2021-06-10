<?php

class Logement{
    private $titre;
    private $ville;
    private $prix;
    private $style;
    private $photo;
    private $description;
    private $chambre;
    private $bain;

    public function insertion(){
        $sql = "INSERT INTO hebergement (titre, ville, prix, style, photo, bio, chambre, salle_de_bain) VALUE('$titre', '$ville', $prix, '$style', '$photo', '$description', $chambre, $bain)";
        $rs = $bdd->prepare($sql);
        $rs->execute();

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Ajout effectué');
        window.location.href='dashboard.php';
        </script>");
    }
}