<?php 

    require 'start.php';
    var_dump($_GET);
    $manager = new PersonnageManager($db);

    $perso = new Personnage(['name' => $_GET['name'], 'pv' => $_GET['pv'], 'atk' => $_GET['atk']]);
        
    $manager -> createPersonnage($perso);

    header("Location: admin.php");

    
?> 