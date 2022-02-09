<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    
     <div class="form-group">
        <label >Titre du film</label>
            <input type="text" class="form-control"  
            placeholder="Entrer le titre du film" name="tf" autocomplete="off">
  
    </div>
    <div class="form-group">
        <label >Réalisateur</label>
            <input type="text" class="form-control"  
            placeholder="Entrer le titre du film" name="rea" autocomplete="off">
  
    </div>

    <div class="form-group">
        <label >Acteurs principaux</label>
            <input type="text" class="form-control"  
            placeholder="Entrer l'acteur" name="ac"  autocomplete="off">
  
    </div>
   
  <label>Sortie du film:</label>
  <input type="date" id="" name="dsf"  autocomplete="off" >
  <input type="submit">


    <div class="form-group">
    <label>Synopsis</label>
    <textarea class="form-control" id="" name="Syn" rows="3"></textarea>
    
    <label>Date entrée utilisateur:</label>
  <input type="date" id="" name="deu"  autocomplete="off">
  <input type="submit">

    <label>date sortie utilisateur:</label>
  <input type="date" id="" name="dsu"  autocomplete="off">
  <input type="submit">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
   
  


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// On récupere les identifiants de la Base de données
$config = parse_ini_file("config.ini", true);

// Connexion à la Base de données
try {
    $dbh = new PDO('mysql:host=' . $config["DB_HOST"] . ';dbname=' . $config["DB_NAME"], $config["DB_USERNAME"], $config["DB_PASSWORD"]);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>

</body>
</html>