
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Atelier PHP</title>
    </head>

    <body>
        <h1>Formulaire d'inscription</h1>

        <form method="post" action="traitement.php">

            <span>Nom :</span>
            <input type="text" name="nom">

            <br><br>

            <span>Date de naissance :</span>
            <input type="date" name="date_naissance">

            <br><br>

            <span>Numéro de téléphone :</span>
            <input type="tel" name="telephone">

            <br><br>

            <button type="submit">Envoyer</button>

        </form>
    </body>
</html>
