<?php
require_once('managers.php');
$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");

try {
        if($_GET['action'] == 'ajouter') {
            
            foreach ($_POST as $key => $value) {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Ajout effectué');
                        window.location.href='dashboard.php';
                        </script>");
                // print_r($_POST);
            }

            $managers->addHebergements($_POST);
            require_once("dashboard.php");
        }
}catch (Exception $e) {
    die('error on index: ' . $e->getMessage() );
}

try {
    if($_GET['action'] == 'supprimer') {
        echo ("<script LANGUAGE='JavaScript'>
             window.alert('Suppression effectuée');
             window.location.href='dashboard.php';
             </script>");
      
        // echo $_GET['id'];
        $managers->delete($_GET['id']);
        require_once("dashboard.php");
    }
}catch (Exception $e) {
die('error on delete: ' . $e->getMessage() );
}

try{
    if($_GET['action'] == 'modifier'){
        $managers->update($_GET['id']);
        echo ("<script LANGUAGE='JavaScript'>
             window.alert('Modification effectuée');
             window.location.href='dashboard.php';
             </script>");
    }
}catch (Exception $e) {
die('error on update: ' . $e->getMessage() );
}

try{
    if($_GET['action'] == 'reservation'){
        $managers->reservation($_GET['id']);
        if($_POST['disponible'] == "non"){
            echo ("<script LANGUAGE='JavaScript'>
             window.alert('Réservation Validée');
             window.location.href='index.php';
             </script>");
        }else{
            header('Location:index.php');
        }
    }
}catch (Exception $e) {
die('error on update: ' . $e->getMessage() );
}

try{
    if($_GET['action'] == 'recherche'){
        $managers->reservation($_GET['id']);
        if($gite->rowCount() == 0){
            while($g = $gite->fetch()){
                echo "<li> ".$g['titre']. "</li>";
            }
        }else{
            echo"aucun résultat pour".$g."!";
        }
    }
}catch (Exception $e) {
die('error on update: ' . $e->getMessage() );
}