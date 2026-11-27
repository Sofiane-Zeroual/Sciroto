<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atelier PHP</title>
</head>
<body>

    <h1>Formulaire utilisateur</h1>

    <form method="post" action="traitement.php">

        Nom :
        <input type="text" name="nom" required>

        <br><br>

        Date de naissance :
        <input type="date" name="date_naissance" required>

        <br><br>

        Téléphone :
        <input type="tel" name="telephone" required>

        <br><br>

        <button type="submit">Envoyer</button>

    </form>

</body>
</html>