<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

include 'connect.php';


if (isset($_POST['submit'])) {
  $namefilm = $_POST['Titre_du_film'];
  $namerealisateur = $_POST['Realisateur'];
  $nameacteurs = $_POST['Acteurs'];
  $datedesortie = date('Y-m-d', strtotime($_POST['Date_de_sortie']));
  $synopsis = $_POST['Synopsis'];
  $dateentreeutilisateur = date('Y-m-d', strtotime($_POST['Date_entree_ut']));
  $datedesortieutilisateur = date('Y-m-d', strtotime($_POST['Date_sortie_ut']));


  $sql = "INSERT INTO
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

  if (
    $_POST['submit'] ||
    $_POST['Titre_du_film'] ||
    $_POST['Realisateur'] ||
    $_POST['Acteurs'] ||
    $_POST['Date_entree_ut'] ||
    $_POST['Date_de_sortie'] ||
    $_POST['Synopsis'] ||
    $_POST['Date_sortie_ut']

  ) {
    echo "<div class='alert alert-success'>l'ajout a réussi.</div>";
    header("Location:http://localhost:3000/index.php ");
exit();   ;
  } else {
    echo "<div class='alert alert-danger'>Echec de l'ajout.</div>";
    echo "<a  class='btn btn-md btn-danger' href=' index.php'>RETOUR</a>";
  }

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':namefilm', $namefilm);
  $stmt->bindValue(':nameacteurs', $nameacteurs);
  $stmt->bindValue(':namerealisateur', $namerealisateur);
  $stmt->bindValue(':datedesortie', $datedesortie);
  $stmt->bindValue(':synopsis', $synopsis);
  $stmt->bindValue(':dateentreeutilisateur', $dateentreeutilisateur);
  $stmt->bindValue(':datesortieutilisateur', $datedesortieutilisateur);

  $stmt->execute();
  
}

?>