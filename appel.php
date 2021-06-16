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
        //
        foreach ($_POST as $key => $value) {
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Suppression effectuée');
                    window.location.href='dashboard.php';
                    </script>");
        }

        $managers->delete($_GET['id_hebergement']);
        require_once("dashboard.php");
    }
}catch (Exception $e) {
die('error on index: ' . $e->getMessage() );
}