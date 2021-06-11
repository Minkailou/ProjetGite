<?php

require_once("connexion.php");

$id = $_POST['id_hebergement'];

exec("DELETE FROM hebergement WHERE id_hebergement = $id");
