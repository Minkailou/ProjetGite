<div class="bandeau">
<div id="searchbar">           
        <form method="GET" action="search.php">
    <fieldset>
        <legend>Recherche</legend>
        <div>
            <input type="search" name="recherche" placeholder="Saisir ville"/>
        </div>
        <div><label>Tous les types</label><input type="radio" name="style" value="Tous" checked/></div>
        <div><label>Chambres</label><input type="radio" name="style" value="Chambre"/></div>
        <div><label>Appartements</label><input type="radio" name="style" value="Appartement"/></div>
        <div><label>Maisons</label><input type="radio" name="style" value="Maison"/></div>
        <div><label>Villas</label><input type="radio" name="style" value="Villa"/></div>
        <br/>
        <input type="submit" value="Rechercher"/>
    </fieldset>
        </form>
    </section>
    <section id="section2">
        <?php 
            function affichageGites($res)
            {
                foreach($res as $key => $gite)
                {
                    ?>
                        <div class="gite">
                            <img class="image_gite" src="img/<?php echo $gite['image'] ?>"/>
                            <div class="description_gite">
                                <div class="<?php echo $gite['style'] ?>"><?php echo $gite['style'] ?></div>
                                <br/>
                                <div><?php echo $gite['ville'] ?></div>
                                <br/>
                                <p><?php echo $gite['bio'] ?></p>
                                <br/>
                                <div><?php echo $gite['prix'] ?> € la nuit</div>
                                <br/>
                                <div class="logos_precision" style="margin-top:10px">
                                    <span><?php echo $gite['chambre'] ?> <p>lits</p></span>
                                    <span><?php echo $gite['salle_de_bain'] ?> <p>Salles de bains</p></span>
                                </div>
                                <a href="reservation.php?id=<?php echo $gite['id']; ?>"><img src="images/reserver.png" title="Réserver"/></a>
                            </div>
                        </div>
                    <?php
                }
            }
?>
</div>

<div id="gallery">
    <div id="paris">
    <div class="bloc-paris">
    <h3 class="titreh3">Paris</h3>
    <img class="fr" src="./img/fr.png" />
    </div>
   <img src="./img/paris.jpg">
   </div>

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh3">Rome</h3>
   <img class="fr" src="./img/it.png" />
   </div>
   <img src="./img/rome.jpg">
   </div>
   

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh3">Bruxelles</h3>
   <img class="fr" src="./img/blg.png" />
   </div>
   <img src="./img/top1.jpg">
   </div>

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh13">Lisbonne</h3>
   <img class="fr" src="./img/prt.png" />
   </div>
   <img src="./img/lisbonne.jpg">
   </div>

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh33">Madrid</h3>
   <img class="fr" src="./img/esp.png" />
   </div>
   <img src="./img/madrid1.jpg">
   </div>

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh23">Athens</h3>
   <img class="fr" src="./img/gr.png" />
   </div>
   <img src="./img/athens.jpg">
   </div>

   <div id="rome">
   <div class="bloc-rome">
   <h3 class="titreh3">Munich</h3>
   <img class="fr" src="./img/ger.png" />
   </div>
   <img src="./img/ger.jpg">
   </div>
   
   
  </div>