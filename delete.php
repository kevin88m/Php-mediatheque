<?php
    include 'connect.php';

    if(isset($_POST['bt-delete_id']))
    {
    $id=$_POST['bt-delete_id'];


    $stmt= $pdo->prepare('SELECT * FROM programmation WHERE id =:id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
   
    $col=$stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('DELETE FROM programmation WHERE id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
        
    header("location:user.php");

    }  
?>