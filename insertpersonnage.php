<?php
require 'start.php';

$pdoStat = $db->prepare('INSERT INTO `personnages` VALUES (NULL,:nom,:atk,:pv)');

$nom = htmlspecialchars($_POST["nom"]);
$atk = htmlspecialchars($_POST["atk"]);
$pv = htmlspecialchars($_POST["pv"]);

var_dump($_POST);

$pdoStat->bindValue(':nom',$nom,PDO::PARAM_STR);
$pdoStat->bindValue(':atk',$atk,PDO::PARAM_STR);
$pdoStat->bindValue(':pv',$pv,PDO::PARAM_STR);

$insertisOK = $pdoStat->execute();

if($insertisOK){
 header("Location: listepersonnage.php");
}else{
 echo("Il y a un problème");
}
// Traite les données renvoyées pae insertpersonnage.php
?>