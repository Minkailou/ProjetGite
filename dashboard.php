<?php
require_once("connexion.php");

$id = $_GET['id_hebergement'];
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

            <?php
            $sql = "SELECT * FROM hebergement ORDER BY id_hebergement DESC";
            $rs = $bdd->prepare($sql);
            $rs->execute();
            ?>

            <h1 class="titles">Disponible</h1>
            <?php
            while($data=$rs->fetch()){
            ?>
                <div class="card">
                    <div class='img'>
                        <img src="img/<?php echo $data['photo']; ?>" alt="photo de logement">
                    </div>
                    <div class="content">
                        <h1 class="titregite"><?php echo $data['titre']; ?></h1>
                        <p class="biogite"><?php echo $data['bio']; ?></p>
                        <p class="villegite"><?php echo $data['ville']; ?></p>
                        <p class="stylegite"><?php echo $data['style']; ?></p>
                        <p class="prixgite"><?php echo $data['prix']; ?>€/nuit</p>
                        <div class="crudbtn">
                            <button class="supprimer"><?php echo "<a class='text-white' href= confirm_delete.php?id_hebergement=" . $data['id_hebergement'] . '>Supprimer</a>'?></button>
                            <button class="modifier">Modifier</button>
                        </div>
                    </div>
                    
                </div>

            <?php 
            //fermeture While
            };
            ?>
            
            <h1 class="titles">Indisponible</h1>
        </div>
    </div>
</body>
</html>