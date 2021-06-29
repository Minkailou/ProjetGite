<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./img/discover.png" rel="icon">
    <link rel="stylesheet" href="ville.css">
    <title>Recherche</title>
</head>
<body>
<?php include('header.inc.php'); ?>
    <section id="section1">
    <div id="searchbar">           
        <form id="search2"method="GET" action="search.php">
    <fieldset id="fiel-search">
    <legend id="leg-search2">Remplissez le champ</legend>
        <div>
            <input type="search" name="recherche" placeholder="Saisir ville"/>
        </div>
        <div><label>Tous les types</label><input type="radio" name="style" value="Tous" checked/></div>
        <div><label>Chambres</label><input type="radio" name="style" value="Chambre"/></div>
        <div><label>Appartements</label><input type="radio" name="style" value="Appartement"/></div>
        <div><label>Maisons</label><input type="radio" name="style" value="Maison"/></div>
        <div><label>Villas</label><input type="radio" name="style" value="Villa"/></div>
        <br/>
        <input id="sub-search2" type="submit" value="Rechercher"/>
    </fieldset>
        </form>
    </section>
    </section>
    <section id="section2">
        <?php 
            function affichageGites($res)
            {
                foreach($res as $key => $gite)
                {
                    ?>
                     <div class="card">
                    <div class='img'>
                        <img class="imggite" src="./img/<?php echo $gite['photo']; ?>" alt="photo de logement">
                    </div>
                    <div class="content">
                        <h1 class="titregite"><?php echo $gite['titre']; ?></h1>
                        <p class="biogite"><?php echo $gite['bio']; ?></p>
                        <p class="villegite"><?php echo $gite['style']; ?></p>
                        <p class="chambregite"><?php echo $gite['chambre']; ?> chambres</p>
                        <p class="stylegite"><?php echo $gite['salle_de_bain']; ?> Salles de bains</p>
                        <p class="prixgite"><?php echo $gite['prix']; ?>€/nuit</p>
                        <div class="crudbtn">
                            <button class="view"><a class="linkview" href="">Réserver</a></button>
                        </div>
                    </div>
                </div>
                    <?php
                }
            }

            $pdo = new PDO('mysql:host=127.0.0.1;dbname=gite;charset=utf8','root','');

            if(isset($_GET['recherche']))
            {
                $recherche = $_GET['recherche'];
                $type = $_GET['style'];
                if($type == 'Tous')
                {
                    $query = $pdo->query("SELECT * FROM hebergement WHERE ville LIKE '%$recherche%' AND disponible = 'oui'");
                    if ($query != 'false')
                    {
                        $res = $query->fetchAll();
                        if (!empty($res))
                            affichageGites($res);
                        else
                        echo "<p>Aucun gîte n'est disponible à la location actuellement...</p>";
                    }
                    else
                    {
                        echo "<p>Erreur interne</p>";
                    }
                }
                else
                {
                    $query = $pdo->query("SELECT * FROM hebergement WHERE ville LIKE '%$recherche%' AND style = '$type' AND disponible = 'oui'");
                    if ($query != 'false')
                    {
                        $res = $query->fetchall();
                        if (!empty($res))
                            affichageGites($res);
                        else
                        echo "<p>Aucun gîte n'est disponible à la location actuellement...</p>";
                    }
                    else
                    {
                        echo "<p>Erreur interne</p>";
                    }
                }
            }
            else
            {
                $query = $pdo->query("SELECT * FROM hebergement WHERE disponible='oui'");
                if ($query != 'false')
                {
                    $res = $query->fetchAll();
                    if (!empty($res))
                        affichageGites($res);
                    else
                    echo "<p>Aucun gîte n'est disponible à la location actuellement...</p>";
                }
                else
                {
                    echo "<p>Erreur interne</p>";
                }
            }

        ?>
    </section>
    <?php include('footer.inc.php'); ?>
</body>
</html>