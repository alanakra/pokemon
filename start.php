<?php
function chargerClasse($classe){
 require 'classes/'.$classe.'.php';
}

spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=localhost;dbname=poo_sgbd;port=3306; charset=UTF8', 'root', '');


?>