<?php 

    require 'start.php';
    var_dump($_GET);
    $manager = new PersonnageManager($db);

    $name = htmlspecialchars($_GET['name']);
    $pv = htmlspecialchars($_GET['pv']);
    $atk = htmlspecialchars($_GET['atk']);

    $perso = new Personnage(['name' => $name, 'pv' => $pv, 'atk' => $atk]);
        
    $manager -> createPersonnage($perso);

    header("Location: admin.php");

?> 