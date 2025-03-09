<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire Stylé</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <form class="form">
            <h2>Modifier</h2>
            <a href="./index.php" class="back_btn">retour</a>
            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="input-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="input-group">
                <label for="age">Âge</label>
                <input type="number" id="age" name="age" required>
            </div>
            <button type="submit" name="modifier">Envoyer</button>
        </form>
        
    </div>
</body>
</html>