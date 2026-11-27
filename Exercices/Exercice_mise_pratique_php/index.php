<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire utilisateur</title>
</head>
<body>

<form method="post" action="traitement.php">
    <h1>Ajouter un nouvel utilisateur</h1>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="date_naissance">Date de naissance :</label>
    <input type="date" id="date_naissance" name="date_naissance"><br><br>

    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone"><br><br>

    <button type="submit" onclick="return verifierForm()">Valider</button>
</form>

<script src="form_verif.js"></script>

</body>
</html>