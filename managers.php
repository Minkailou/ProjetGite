<?php

class Hebergement{
    private $_id;
    private $_titre;
    private $_ville;
    private $_prix;
    private $_style;
    private $_photo;
    private $_description;
    private $_chambre;
    private $_salle_de_bain;


//getters

public function getId(){
    return $this->_id;
}

public function getTitre(){
    return $this->_titre;
}

public function getVille(){
    return $this->_ville;
}

public function getPrix(){
    return $this->_prix;
}

public function getStyle(){
    return $this->_style;
}

public function getPhoto(){
    return $this->_photo;
}

public function getDescription(){
    return $this->_description;
}

public function getChambre(){
    return $this->_chambre;
}

public function getBain(){
    return $this->_salle_de_bain;
}

//setters

public function setID($id){
    $id= (int) $id;

    if($id>0){
        $this->_id=$id;
    }
}

public function setTitre($titre){
    if(is_string($titre)){
        $this->_titre = $titre;
    }
}

public function setVille($ville){
    if(is_string($ville)){
        $this->_ville = $ville;
    }
}

public function setStyle($style){
    if(is_string($style)){
        $this->_titre = $style;
    }
}    

public function setDescription($description){
    if(is_string($description)){
        $this->_description = $description;
    }
}

public function setChambre($chambre){
    $chambre= (int) $chambre;

    if($chambre>0){
        $this->_chambre=$chambre;
    }
}

public function setBain($bain){
    $bain= (int) $bain;

    if($bain>0){
        $this->_salle_de_bain=$bain;
    }
}
}
class HebergementManager extends Hebergement{
    private $bdd;

    public function __construct($bdd){
        $this->setDb($bdd);
    }

    public function add($gite){
        $sql = $this->bdd->prepare("INSERT INTO hebergement (titre, ville, prix, style, photo, bio, chambre, salle_de_bain) VALUE(:titre, :ville, :prix, :style, :photo, :bio, :chambre, :salle_de_bain)");
        $sql->bindValue(':titre', $gite->getTitre());
        $sql->bindValue(':ville', $gite->getVille());
        $sql->bindValue(':prix', $gite->getPrix());
        $sql->bindValue(':style', $gite->getStyle());
        $sql->bindValue(':photo', $gite->getPhoto());
        $sql->bindValue(':bio', $gite->getDescription());
        $sql->bindValue(':chambre', $gite->getChambre());
        $sql->bindValue(':salle_de_bain', $gite->getBain());
        $sql->execute();
    }

    public function setDb($bdd){
        $this->bdd=$bdd;
    }
}

$gite = new Hebergement(['titre' => 'Palace','Ville' => 'Paris', 'Prix' => '4000','Style' => 'Villa', 'photo' => 'villa.png','bio' => 'test', 'chambre' => '2','Salle_de_bain' => '1']);

$bdd = new PDO('mysql:host=localhost;dbname=gite', 'root', '');

$manager = new HebergementManager($bdd);

$manager->add($gite);