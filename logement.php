<?php

class Hebergement{
    private $_id
    private $_titre;
    private $_ville;
    private $_prix;
    private $_style;
    private $_photo;
    private $_description;
    private $_chambre;
    private $_salle_de_bain;
}

//getters

public function id(){
    return $this->_id
}

public function titre(){
    return $this->_titre
}

public function ville(){
    return $this->_ville
}

public function prix(){
    return $this->_prix
}

public function style(){
    return $this->_style
}

public function photo(){
    return $this->_photo
}

public function description(){
    return $this->_description
}

public function chambre(){
    return $this->_chambre
}

public function bain(){
    return $this->_bain
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
