<?php
   include 'connect.php';

   $id=$_GET['id'];
 
   $stmt=$pdo->prepare("DELETE  from programmation where id=:id");
   $stmt->bindValue(':id', $id);
   $stmt->execute();
   

   header("Location: http://localhost:3000/index.php");
exit();

   ?>



?>