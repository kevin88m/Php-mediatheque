<?php include 'connect.php';

if (isset($_POST['submit'])){
  $namefilm = $_POST['tf'];
  $namerealisateur = $_POST['rea'];
  $nameacteurs = $_POST['ac'];
  $datedesortie = date('Y-m-d',strtotime ($_POST['dsf']));
 
  $synopsis = $_POST['Syn'];
  
  $dateentreeutilisateur = date('Y-m-d',strtotime ($_POST['deu']));
  $datedesortieutilisateur = date('Y-m-d',strtotime ($_POST['dsu']));
  
  
  $sql="INSERT INTO
   programmation (
     `Titre_du_film`,
     `Acteurs`,
     `Realisateur`,
     `Date_de_sortie`,
     `Synopsis`,
     `Date_entree_ut`,
     `Date_sortie_ut`
    )
  VALUES ( 
    :namefilm,
    :nameacteurs,
    :namerealisateur,
    :datedesortie,
    :synopsis,
    :dateentreeutilisateur,
    :datesortieutilisateur
  )";

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':namefilm',$namefilm);
  $stmt->bindValue(':nameacteurs',$nameacteurs);
  $stmt->bindValue(':namerealisateur',$namerealisateur);
  $stmt->bindValue(':datedesortie',$datedesortie);
  $stmt->bindValue(':synopsis',$synopsis);
  $stmt->bindValue( ':dateentreeutilisateur', $dateentreeutilisateur);
  $stmt->bindValue( ':datesortieutilisateur', $datedesortieutilisateur);
  
  $stmt->execute();
  
}


?>


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
        <label>Titre du film</label>
        <input type="text" class="form-control" placeholder="Entrer le titre du film" 
        name="tf" >

      </div>
      <div class="form-group">
        <label>Réalisateur</label>
        <input type="text" class="form-control" placeholder="Entrer le titre du réalisateur" 
        name="rea" >

      </div>

      <div class="form-group">
        <label>Acteurs principaux</label>
        <input type="text" class="form-control" placeholder="Entrer l'acteur" 
        name="ac" >

      </div>

      <label>Sortie du film:</label>
      <input type="date" id="" name="dsf" >
      


      <div class="form-group">
        <label>Synopsis</label>
        <textarea class="form-control" id="" 
        name="Syn" rows="3" ></textarea>

        <label>Date entrée utilisateur:</label>
        <input type="date" id="" name="deu">
      

        <label>date sortie utilisateur:</label>
        <input type="date" id="" name="dsu" >
      

        <button type="submit" class="btn btn-primary" name="submit"
        >Submit</button>
    </form>

  </div>
  </body>

</html>