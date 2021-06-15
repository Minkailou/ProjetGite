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

    public function getHebergements() {
        try {
            $req = $this->dbPDO->query("SELECT * FROM $this->tablename ");
        }
        catch (Exception $e) {
            die('erreur on list: ' . $e->getMessage());
        }
        return $req;
    }

    public function addHebergements($titre, $ville, $prix, $style, $photo, $bio, $chambre, $bain){
        try{
            $rs = $this->dbPDO->prepare("INSERT INTO $this->tablename (titre, ville, prix, style, photo, bio, chambre, salle_de_bain) VALUE(:titre, :ville, :prix, :style, :photo, :bio, :chambre, :salle_de_bain)");
            $reponse = $rs->execute(array(
                'titre'=>$titre,
                'ville'=>$ville,
                'prix'=>$prix,
                'style'=>$style,
                'photo'=>$photo,
                'bio'=>$bio,
                'chambre'=>$chambre,
                'salle_de_bain'=>$bain
            ));
        }
    catch (Exception $e) {
        die('erreur on add: ' . $e->getMessage() );
    }
    return $reponse; 
    }
}
