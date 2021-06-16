<?php
class ConnexionManager {
    protected $hostname;
    protected $username;
    protected $password;
    protected $basename;
    public $dbPDO;

    public function __construct($hostname, $username, $password, $basename) {
        $this->hostname=$hostname;
        $this->username=$username;
        $this->password=$password;
        $this->basename=$basename;
        $this->dbPDO=$this->connectbase();
    }

    protected function connectBase() {
        try {
            $db= new PDO("mysql:host=$this->hostname;dbname=$this->basename",$this->username, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db; 
        }
        catch(PDOException $e) {
            echo 'connexion failed:' . $e->getMessage();
            }
    }

    public function getHostname() {
        return $this->hostname;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getbasename() {
        return $this->getbasename;
    }
    public function setHostname() {
        $this->hostname=$hostname;
    }
    public function setUsername() {
        $this->username=$username;
    }
    public function setPassword() {
        $this->password=$password;
    }
    public function setbasename() {
        $this->basename=$basename;
    }
}

class HebergementManager extends ConnexionManager{
    protected $tablename;

    function __construct($hostname, $username, $password, $basename,$tablename) {
        parent::__construct($hostname, $username, $password, $basename);
        $this->tablename=$tablename;
    }

    public function getHebergementsdispo() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE disponible ='oui' ");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementsindispo() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE disponible = 'non' ");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementsparis() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE ville = 'paris' AND disponible ='oui'");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementsrome() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE ville = 'rome'AND disponible ='oui' ");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementsathens() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE ville = 'athènes' AND disponible ='oui'");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementslisbonne() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE ville = 'lisbonne' AND disponible ='oui'");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function getHebergementsmadrid() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename WHERE ville = 'madrid' AND disponible ='oui' ");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function addHebergements($data){
        try{
            $rs = $this->dbPDO->prepare("INSERT INTO $this->tablename (titre, ville, prix, style, photo, bio, chambre, salle_de_bain, disponible) VALUE(:titre, :ville, :prix, :style, :photo, :bio, :chambre, :salle_de_bain, :disponible)");
            $reponse = $rs->execute(array(
                'titre'=>$data['titre'],
                'ville'=>$data['ville'],
                'prix'=>$data['prix'],
                'style'=>$data['style'],
                'photo'=>$data['photo'],
                'bio'=>$data['bio'],
                'chambre'=>$data['chambre'],
                'salle_de_bain'=>$data['salle_de_bain'],
                'disponible'=>$data['disponible']

            ));
        }
    catch (Exception $e) {
        die('erreur on add: ' . $e->getMessage() );
    }
    return $reponse; 
    }

    public function delete($id){
        $rs=exec("DELETE FROM gite WHERE id_hebergement = $id");
    }
}
