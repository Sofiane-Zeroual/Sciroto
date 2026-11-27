<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Veuiller mettre votre nom</p>
    <form method="post" action="traitement2.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="nom@exemple.com" required>
    

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>