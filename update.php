<?php
include "connect.php";

if(isset($_POST['bt-update_id']))


{

        $id = $_POST['bt-update_id'];
        echo "<h1>modifier" .$id. "</h1>";
        $stmt=$pdo->prepare('SELECT * FROM programmation WHERE id=:id');
        $stmt->bindParam(':id',$id);
        $stmt->execute( );
        $col = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($col);
    }
    


if (isset($_POST['bt-update_id'])){

$stmt = $pdo->prepare('UPDATE programmation SET 
Titre_du_film=:namefilm,
Acteurs=:nameacteurs,
Date_de_sortie=:datedesortie,
Synopsis= :synopsis,
Realisateur= :namerealisateur,
Date_entree_ut=:dateentreeutilisateur,
Date_sortie_ut=:datesortieutilisateur,
id=:id
 WHERE   1');

    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':namefilm', $namefilm);
    $stmt->bindParam(':nameacteurs', $nameacteurs);
    $stmt->bindParam(':namerealisateur', $namerealisateur);
    $stmt->bindParam(':datedesortie', $datedesortie);
    $stmt->bindParam(':synopsis', $synopsis);
    $stmt->bindParam(':dateentreeutilisateur', $dateentreeutilisateur);
    $stmt->bindParam(':datesortieutilisateur', $datedesortieutilisateur);
    $stmt->execute();
   
}
?>
