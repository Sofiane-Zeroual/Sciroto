
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
            echo "<br><br>";


            $connexion = new mysqli("localhost", "root", "", "atelier_php");

            if ($connexion->connect_error) {
                die("Erreur de connexion.");
            }

            $connexion->set_charset("utf8mb4");


            $requete = $connexion->prepare(
                "INSERT INTO user (nom, date_naissance, telephone)
                 VALUES (?, ?, ?)"
            );

            $requete->bind_param("sss", $nom, $date_naissance, $telephone);

            if ($requete->execute()) {
                echo "Utilisateur enregistré avec succès !";
            } else {
                echo "Erreur lors de l'enregistrement.";
            }

            $requete->close();
            $connexion->close();
        }
    ?>

    <br><br>
    <a href="index 2.php">Retour au formulaire</a>

</body>
</html>
