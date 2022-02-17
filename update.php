<?php

include 'connect.php';
$id=$_GET['id'];
$namefilm = $_POST['Titre_du_film'];
$namerealisateur = $_POST['Realisateur'];
$nameacteurs = $_POST['Acteurs'];
$datedesortie = date('Y-m-d', strtotime($_POST['Date_de_sortie']));
$synopsis = $_POST['Synopsis'];
$dateentreeutilisateur = date('Y-m-d', strtotime($_POST['Date_entree_ut']));
$datedesortieutilisateur = date('Y-m-d', strtotime($_POST['Date_sortie_ut']));


$sql=" UPDATE  programmation SET 
`Titre_du_film` = :namefilm, 
`Acteurs` = :nameacteurs, 
`Date_de_sortie`= :datedesortie, 
`Synopsis` = :synopsis, 
`Realisateur` = :namerealisateur,
`Date_entree_ut` = :dateentreeutilisateur,
`Date_sortie_ut` = :datesortieutilisateur 

where id=:id";


$stmt = $pdo->prepare($sql);
  $stmt->bindParam(':namefilm', $namefilm);
  $stmt->bindParam(':nameacteurs', $nameacteurs);
  $stmt->bindParam(':namerealisateur', $namerealisateur);
  $stmt->bindParam(':datedesortie', $datedesortie);
  $stmt->bindParam(':synopsis', $synopsis);
  $stmt->bindParam(':dateentreeutilisateur', $dateentreeutilisateur);
  $stmt->bindParam(':datesortieutilisateur', $datedesortieutilisateur);
  $stmt->bindParam(':datesortieutilisateur', $datedesortieutilisateur); 
  $stmt->bindParam(':datesortieutilisateur', $datedesortieutilisateur); 
  $stmt->bindValue(':id', $id,PDO::PARAM_INT);
  $stmt->execute();
 
  header("Location:http://localhost:3000/index.php");
exit();
?>