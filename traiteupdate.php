<?php
require 'start.php';
$manager = new PersonnageManager($db);
$name = htmlspecialchars($_GET['name']);
$pv = htmlspecialchars($_GET['pv']);
$atk = htmlspecialchars($_GET['atk']);

var_dump($_GET);




$updatePerso = $manager->updatePersonnage($_GET);

var_dump($updatePerso);
?>