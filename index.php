<?php
require 'connect.php';

if (isset($_POST['submit'])){
  $namef = $_POST['tf'];
  $namer = $_POST['rea'];
  $namea = $_POST['ac'];
  $namedsf = date('Y-m-d',strtotime ($_POST['dsf']));
  $nameSyn = $_POST['Syn'];
  $namedeu = date('Y-m-d',strtotime ($_POST['deu']));
  $namedsu = date('Y-m-d',strtotime ($_POST['dsu']));

  

  $sql = $pdo->prepare("INSERT INTO 'programmation média' (tf,rea,ac,dsf,Syn,deu,dsu)
    VALUES ( :namef,:namer,:namea,:namedsf,:nameSyn,:namedeu,:namedsu)");
  $sql->bindParam(':namef', $namef);
  $sql->bindParam(':namer',$namer);
  $sql->bindParam(':namea', $namea);
  //$sql->bindParam(':namedsf', $namdsf);
  //$sql->bindParam(':nameSyn', $nameSyn);
 // $sql->bindParam(':namedeu', $namedeu);
 // $sql->bindParam(':namedsu', $namedsu);
  $sql->execute();
  
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
        name="tf" autocomplete="off">

      </div>
      <div class="form-group">
        <label>Réalisateur</label>
        <input type="text" class="form-control" placeholder="Entrer le titre du réalisateur" 
        name="rea" autocomplete="off">

      </div>

      <div class="form-group">
        <label>Acteurs principaux</label>
        <input type="text" class="form-control" placeholder="Entrer l'acteur" 
        name="ac" autocomplete="off">

      </div>

      <label>Sortie du film:</label>
      <input type="date" id="" name="dsf" autocomplete="off">
      


      <div class="form-group">
        <label>Synopsis</label>
        <textarea class="form-control" id="" 
        name="Syn" rows="3" autocomplete="off"></textarea>

        <label>Date entrée utilisateur:</label>
        <input type="date" id="" name="deu" autocomplete="off">
      

        <label>date sortie utilisateur:</label>
        <input type="date" id="" name="dsu" autocomplete="off">
      

        <button type="submit" class="btn btn-primary" name="submit"
        >Submit</button>
    </form>

  </div>
  </body>

</html>