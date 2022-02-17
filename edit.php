<?php
include "connect.php";

$id=$_GET['id'];
$sql="SELECT *  from programmation where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>CRUD mod</title>
</head>
<body>
    

    <div class="container">
        <div class="page-header">
            <h1>Modification du film</h1>
        </div>
        <form action="update.php?id=<?=$user['id']?>" method="post">
           
                <tr>
                    <td> Titre du film</td>
                    <td><input  type='text' name='Titre_du_film' 
                                class='form-control' value='<?=$user['Titre_du_film']?>' />
                    </td>
                </tr>
                <tr>
                    <td> Acteurs</td>
                    <td><input  type='text' 
                                name="Acteurs"    
                                class='form-control' 
                                value='<?= $user['Acteurs'] ?>' /></td>
                </tr>
                <tr>
                <td> Date de sortie</td>
                    <td><input  type='date' 
                                name="Date_de_sortie"    
                                class='form-control' 
                                value='<?= $user['Date_de_sortie'] ?>' /></td>
                </tr>
                
                <tr>
                    <label>Synopsis</label>
                    <textarea   class="form-control"  
                                name="Synopsis" 
                                rows="3"
                                value='<?= $user['Synopsis'] ?>'></textarea>
                </tr>
                <td> Acteurs</td>
                    <td><input  type='text' 
                                name="Realisateur"    
                                class='form-control' 
                                value='<?= $user['Realisateur'] ?>' /></td>
                </tr>
                <label>date sortie utilisateur:</label>
            <input type="date" name="Date_sortie_ut" value='<?= $user['Date_sortie_ut'] ?>'>
                
            
            <label>Date entrée utilisateur:</label>
            <input type="date" name="Date_entree_ut" value='<?= $user['Date_entree_ut']?>'>

               
               
                

                <tr>
                   
                    <td>
                        <input type='submit' value='Update' class='btn btn-primary' name='submit' />
                        <a href='index.php' class='btn btn-danger'>Retour à la liste</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>