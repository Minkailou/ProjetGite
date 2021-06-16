<?php
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
            <?php 
            $heb = $managers->getHebergementsdispo();
            while($data = $heb->fetch()) {
                $hebergement = new Hebergement($data);
               
            ?>
                <div class="card">
                    <div class='img'>
                        <img src="img/<?php echo $hebergement->getPhoto(); ?>" alt="photo de logement">
                    </div>
                    <div class="content">
                        <h1 class="titregite"><?php echo $hebergement->getTitre(); ?></h1>
                        <p class="biogite"><?php echo $hebergement->getDescription(); ?></p>
                        <p class="villegite"><?php echo $hebergement->getVille(); ?></p>
                        <p class="stylegite"><?php echo $hebergement->getStyle(); ?></p>
                        <p class="prixgite"><?php echo $hebergement->getPrix(); ?>€/nuit</p>
                        <div class="crudbtn">
                        <form action="appel.php?action=supprimer&id=<?= $hebergement->getId(); ?>" method="POST">
                                <input class="supprimer" type="submit" value="Supprimer">
                        </form>
                            <button class="modifier">Modifier</button>
                        </div>
                    </div>
                    
                </div>

            <?php 
            //fermeture While
            };
            ?>
            
            <h1 class="titles">Indisponible</h1>
            <?php 
            $heb = $managers->getHebergementsindispo();
            while($data = $heb->fetch()) {
                $hebergement = new Hebergement($data);
            ?>
            <div class="card">
                    <div class='img'>
                        <img src="img/<?php echo $hebergement->getPhoto(); ?>" alt="photo de logement">
                    </div>
                    <div class="content">
                        <h1 class="titregite"><?php echo $hebergement->getTitre(); ?></h1>
                        <p class="biogite"><?php echo $hebergement->getDescription(); ?></p>
                        <p class="villegite"><?php echo $hebergement->getVille(); ?></p>
                        <p class="stylegite"><?php echo $hebergement->getStyle(); ?></p>
                        <p class="prixgite"><?php echo $hebergement->getPrix(); ?>€/nuit</p>
                        <div class="crudbtn">
                        <form action="appel.php?action=supprimer&id=<?= $hebergement->getId(); ?>" method="POST">
                                <input class="supprimer" type="submit" value="Supprimer">
                        </form>
                            <button class="modifier">Modifier</button>
                        </div>
                    </div>
                </div>
            <?php
            //fermeture While
            };
            ?>
        </div>
    </div>
</body>
</html>