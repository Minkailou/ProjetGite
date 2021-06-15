<?php
require_once('managers.php');
$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");

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
    private $_disponible;

    public function __construct($values){
        $this->_id = $values['id_hebergement'];
        $this->_titre = $values['titre'];
        $this->_ville = $values['ville'];
        $this->_prix = $values['prix'];
        $this->_style = $values['style'];
        $this->_photo = $values['photo'];
        $this->_description = $values['bio'];
        $this->_chambre = $values['chambre'];
        $this->_salle_de_bain = $values['salle_de_bain'];
    }
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

    public function getDispo(){
        return $this->_disponible;
    }

    //setters

    public function setID($id){
        $this->_id=$id;
    }

    public function setTitre($titre){
        $this->_titre = $titre;
        
    }

    public function setVille($ville){
        $this->_ville = $ville;
        
    }

    public function setStyle($style){
        $this->_titre = $style;
        
    }    

    public function setPrix($prix){
        $this->_prix = $prix;
        
    }  

    public function setDescription($description){
        $this->_description = $description;
        
    }

    public function setChambre($chambre){
        $this->_chambre = $chambre;

    }

    public function setBain($bain){
        $this->_salle_de_bain = $bain;

    }

    public function setDispo($disponible){
        $this->_disponible = $disponible;
    }
}