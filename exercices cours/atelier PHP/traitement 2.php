
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement du formulaire</title>
</head>

<body>
    <h1>Résultat du formulaire</h1>

    <?php
        $nom = trim($_POST["nom"] ?? "");
        $date_naissance = trim($_POST["date_naissance"] ?? "");
        $telephone = trim($_POST["telephone"] ?? "");

        if ($nom == "" || $date_naissance == "" || $telephone == "") {
            echo "Erreur : tous les champs doivent être remplis.";
        } else {
            echo "Nom : " . htmlspecialchars($nom);
            echo "<br>";

            echo "Date de naissance : " . htmlspecialchars($date_naissance);
            echo "<br>";

            echo "Téléphone : " . htmlspecialchars($telephone);
        }
    ?>

    <br><br>
    <a href="index 2.html">Retour au formulaire</a>

</body>
</html>
