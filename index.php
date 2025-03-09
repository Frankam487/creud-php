


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Utilisateurs</title>
  <link rel="stylesheet" href="ajouter.css">
</head>
<body>
  <div class="container">
    <a href="ajouter.php" class="btn-add">Ajouter</a>

    <table>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Âge</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Frank</td>
          <td>Kamgang</td>
          <td>22 ans</td>
          <td><a href="./modifier.php" class="btn-edit">✏️</a></td>
          <td><a href="./supprimer.php" class="btn-delete">❌</a></td>
        </tr>
        <tr>
          <td>Frank</td>
          <td>Kamgang</td>
          <td>22 ans</td>
          <td><a href="./modifier.php" class="btn-edit">✏️</a></td>
          <td><a href="./supprimer.php" class="btn-delete">❌</a></td>
        </tr>
        <?php require "./connect.php";

$req= mysqli_query($con, "SELECT * FROM employe");

if(mysqli_num_rows($req) == 0){
echo "ya pas encore demploye";
} else {
  while($row=mysqli_fetch_assoc($req)){
    ?>
<tr>
  <td><?= $row['nom']?></td>
  <td><?= $row['nom']?></td>
  <td><?= $row['nom']?></td>
  <td><a href="modifier.php?id=<?=$row['id']?>">Modif</a></td>
</tr>
<?php
}
}
?>  
      </tbody>
    </table>
  </div>
</body>
</html>
