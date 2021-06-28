<?php
require_once('managers.php');
require 'hebergement.php';
$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./img/discover.png" rel="icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ville.css">
    <title>Paris</title>
</head>
<body>
    <?php include "header.inc.php"?>
    <?php 
            $heb = $managers->getHebergementsparis();
            while($data = $heb->fetch()) {
                $hebergement = new Hebergement($data);
               
            ?>
                <div class="card">
                    <div class='img'>
                        <img class="imggite" src="img/<?php echo $hebergement->getPhoto(); ?>" alt="photo de logement">
                    </div>
                    <div class="content">
                        <h1 class="titregite"><?php echo $hebergement->getTitre(); ?></h1>
                        <p class="biogite"><?php echo $hebergement->getDescription(); ?></p>
                        <p class="villegite"><?php echo $hebergement->getVille(); ?></p>
                        <p class="stylegite"><?php echo $hebergement->getStyle(); ?></p>
                        <p class="prixgite"><?php echo $hebergement->getPrix(); ?>€/nuit</p>
                        <div class="crudbtn">
                            <button class="view"><a class="linkview" href="reservation.php?id=<?= $hebergement->getId(); ?>">Réserver</a></button>
                        </div>
                    </div>
                    
                </div>
            <?php
            };
            ?>
    <?php include "footer.inc.php"?>
</body>
</html>