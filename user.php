<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud(change,add,delete)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f5f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2082E3;
  color: white;
}
</style>
<body>
<div class="container my-3">
    <button class="btn btn-primary"><a href="index.php"class="text-light">
    Ajouter un film</a></button>
</div>

<?php
           include 'connect.php';
           
            
          $stmt=$pdo->prepare("SELECT * FROM programmation");
          $stmt->execute();
          while($col=$stmt->fetch(PDO::FETCH_ASSOC))
           {
            
  

         

?>
  <table id="customers">
  <tr>
      <th>ID</th>      
      <th>Titre du film</th>
      <th  >Acteurs</th>
      <th >Date de sortie</th>
      <th >Synopsis</th>
      <th >Realisateur</th>
      <th  >Date entrée utilisateur</th>
      <th  >Date sortie utilisateur</th>
  </tr>
  <tr>
  

    <td><?php echo $col['id'] ?></td>   
    <td><?php echo $col['Titre_du_film'] ?></td>
    <td><?php echo $col['Acteurs'] ?> </td>
    <td><?php echo $col['Date_de_sortie'] ?></td>
    <td><?php echo $col ['Synopsis'] ?></td>
    <td><?php echo $col['Realisateur'] ?></td>
    <td><?php echo $col['Date_entree_ut'] ?></td>
    <td><?php echo $col['Date_sortie_ut'] ?></td>
  </tr>
  <td>
<form  method="POST" action="delete.php">

<button><a href="" class="btn btn-primary" class="text-light"
>modifier</a></button>

<button type="submit" name="delete_id" value="<?php echo $col['id']; ?>" 

class="btn btn-danger"  class="text-light" 
>supprimer</button>

</form>
</td>
  <?php

}

?>

</table> 
</body>
</html>