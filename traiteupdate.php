<?php
require 'start.php';

var_dump($_GET);

$manager = new PersonnageManager($db);
$id = $_GET['id'];
$pv = (int)htmlspecialchars($_GET['pv']);
$atk = (int)htmlspecialchars($_GET['atk']);

$update = new Personnage(["id"=>$id, "pv"=>$pv, "atk"=>$atk]);

$manager->updatePersonnage($update);

if($manager){
 header('Location:admin.php');
}else{
 echo "Aucune mise à jour";
}
?>