<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <title>Liste des personnages</title>
 <?php
    require 'start.php';
   $manager = new PersonnageManager($db);
   $liste = $manager -> getAllPersonnage();
   foreach($liste as $perso){
 ?>
 
</head>
<body>
  <div class="container">
  <h1 class="text-center mb-5">Liste des personnages</h1>
   <div class="row">
   <table class="table">
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Attaque</th>
          <th scope="col">Pv</th>
        </tr>
      </thead>
      <?php
   }
       echo $perso->getName();
      ?>
  </table>
   </div>

   <div class="row">
   <form action="insertpersonnage.php" class="text-center col-md-4" method="POST">
   <h5 class="text-center mb-4">Ajouter un pokémon</h5>
      <div class="form-group">
       <label for="">Nom du pokémon</label>
       <input type="text" name="nom" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Attaque</label>
        <input type="text" name="atk" class="form-control">
      </div>

      <div class="form-group">
      <label for="">Pv</label>
      <input type="text" name="pv" class="form-control">
      </div>

      <div class="form-group">
      <label for="">Lien image</label>
      <input type="text" name="img" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
   </form>
   </div>
  </div>
</body>
</html>