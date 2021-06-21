<?php
require_once('managers.php');
require 'hebergement.php';
$managers = new HebergementManager("localhost", "root", "", "gite", "hebergement");

include('header.inc.php');
include('body.inc.php');
include('footer.inc.php');
?>


