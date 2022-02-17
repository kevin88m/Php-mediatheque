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
    <form method="post" action="save.php">

      <div class="form-group">
        <label>Titre du film</label>
        <input type="text" class="form-control" placeholder="Entrer le titre du film" name="Titre_du_film">

      </div>
      <div class="form-group">
        <label>Réalisateur</label>
        <input type="text" class="form-control" placeholder="Entrer le titre du réalisateur" name="Realisateur">

      </div>

      <div class="form-group">
        <label>Acteurs principaux</label>
        <input type="text" class="form-control" placeholder="Entrer l'acteur" name="Acteurs">

      </div>

      <label>Sortie du film:</label>
      <input type="date"  name="Date_de_sortie">



      <div class="form-group">
        <label>Synopsis</label>
        <textarea class="form-control"  name="Synopsis" rows="3"></textarea>

        <label>Date entrée utilisateur:</label>
        <input type="date" name="Date_entree_ut">


        <label>date sortie utilisateur:</label>
        <input type="date" name="Date_sortie_ut">



        <input type="submit" class="btn btn-primary" value="sauvegarde" name="submit">
        <a href='index.php' class='btn btn-danger'>retour à la liste </a>
    </form>

  </div>
</body>

</html>