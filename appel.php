<?php
require_once('managers.php');

$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");

try {
        if($_GET['action'] == 'ajouter') {
            //
            echo 'Les valeurs suivantes ont été ajoutées: ';
            foreach ($_POST as $key => $value) {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Ajout effectué');
                        window.location.href='dashboard.php';
                        </script>");
            }

            $managers->addHebergements($_POST);
            require_once("dashboard.php");
        }
}catch (Exception $e) {
    die('error on index: ' . $e->getMessage() );
}