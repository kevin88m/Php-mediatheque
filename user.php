<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud(change,add,delete)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container my-3">
    <button class="btn btn-primary"><a href="index.php"class="text-light">
    Ajouter un film</a></button>
</div>

  .<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre du film</th>
      <th scope="col">Acteurs</th>
      <th scope="col">Date de sortie</th>
      <th scope="col">Synopsis</th>
      <th scope="col">Réalisateur</th>
      <th scope="col">Date d'entrée utilisateur</th>
      <th scope="col">Date de sortie utilisateur</th>
    </tr>
  </thead>
  <tbody>

  <?php
            $pdo = require 'connect.php';
            
            $sql="SELECT * FROM 'programmation'";

            $stmt= $pdo->prepare($sql);
            
            $stmt->bindValue(':namefilm',$namefilm);
            $stmt->bindValue(':nameacteurs',$nameacteurs);
            $stmt->bindValue(':namerealisateur',$namerealisateur);
            $stmt->bindValue(':datedesortie',$datedesortie);
            $stmt->bindValue(':synopsis',$synopsis);
            $stmt->bindValue( ':dateentreeutilisateur', $dateentreeutilisateur);
            $stmt->bindValue( ':datesortieutilisateur', $datedesortieutilisateur);
  
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);


?>
    <!--<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>-
  </tbody>
</table>
    
</body>
</html>