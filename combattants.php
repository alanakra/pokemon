<!DOCTYPE html>
<html lang="fr">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <title>Choix des combattants en POO</title>
 <?php
 require 'start.php';
 $manager = new PersonnageManager($db);
 $liste = $manager->getAllPersonnage();
 ?>
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


 <h1 class="text-center mb-3 mt-3">Choisissez vos combattants en POO</h1>
 <div class="container">
  <div class="row">
   <form action="traitecombat.php">
    <select class="custom-select custom-select-lg mb-4" name="id1">
     <option selected>Choisissez votre attaquant
     <?php
           foreach($liste as $result){
           echo "<option value=".$result->getId().">".$result->getName()."</option>";
           }
          ?>
      </option>
    </select>
     <h2>VS</h2>
    <select class="custom-select custom-select-lg mb-3" name="id2">
     <option selected>Choisissez la victime
     <?php
           foreach($liste as $result){
           echo "<option value=".$result->getId().">".$result->getName()."</option>";
           }
          ?>
      </option>
    </select>

    <button type=submit class="btn btn-primary">Envoyer</button>
   </form>

   

  </div>

  
  <div class="row mt-3">
  <?php
          foreach ($liste as $perso){
            ?>
  <div class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $perso -> getName() ?></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">PV: <?php echo $perso -> getPv() ?></li>
      <li class="list-group-item">Atk: <?php echo $perso -> getAtk() ?></li>
    </ul>
  </div>
  <?php 
                
            }
            
            ?>
  </div> <!--Fin row-->
  

 </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>