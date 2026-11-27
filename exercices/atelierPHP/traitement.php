<!DOCTYPE html>
<html>
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

    if ($nom === "" || $date_naissance === "" || $telephone === "") {

        echo "Tous les champs doivent être remplis.";

    } else {

        // Connexion à la base de données
        $conn = new mysqli("localhost", "root", "", "atelier_php");
        $conn->set_charset("utf8mb4");

        // Requête préparée
        $stmt = $conn->prepare(
            "INSERT INTO `user` (nom, date_naissance, telephone)
             VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $nom, $date_naissance, $telephone);

        // Exécution de la requête
        $stmt->execute();

        echo "Utilisateur enregistré avec succès !";
        echo "<br><br>";

        echo "Nom : " . htmlspecialchars($nom);
        echo "<br>";
        echo "Date de naissance : " . htmlspecialchars($date_naissance);
        echo "<br>";
        echo "Téléphone : " . htmlspecialchars($telephone);

        $stmt->close();
        $conn->close();

    }

    ?>

</body>
</html>