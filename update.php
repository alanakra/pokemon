<?php
 require 'start.php';
 $manager = new PersonnageManager($db);
 $update = $manager -> getOnePersonnageById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Mise à jour de <?php echo $update->getName() ?></title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/International_Pok%C3%A9mon_logo.svg" alt="" height="50px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Ajouter<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="combattants.php">Combat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
 <div class="container">
 <h1 class="text-center mt-1">Modifier votre pokémon</h1>
  <div class="row">
    <form action="<?php echo 'traiteupdate.php?id='.$update->getId() ?>" class="col-12">
    <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" value="<?php echo $update->getName() ?>" require>
    </div>

    <div class="form-group">
            <label for="pv">PV</label>
            <input type="text" name="pv" class="form-control" value="<?php echo $update->getPv() ?>" require>
    </div>
        
    <div class="form-group">
            <label for="atk">Points d'attaque</label>
            <input type="text" name="atk" class="form-control"
            value="<?php echo $update->getAtk() ?>" require>
    </div>
        
        <br>

     <input type="submit" class="btn btn-primary" value="Modifier">
    </form>
  </div>
 </div>
</body>
</html>