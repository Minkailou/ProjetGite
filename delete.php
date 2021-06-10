<?php

require_once("connexion.php");

$id = $_POST['id_hebergement'];

$sql="DELETE FROM hebergement WHERE id_hebergement = $id"
$rs = $bdd->prepare($sql);
$rs->execute();