<?php
  require 'start.php';

  $manager = new PersonnageManager($db);

  $suppr = $manager -> deletePersonnage($_GET['id']);

  header('Location: admin.php');
?>