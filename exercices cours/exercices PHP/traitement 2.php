
<html>
    <head>
        <title>Traitement du formulaire</title>
    </head>

    <body>
        <h1>Résultat du formulaire</h1>

        <?php
            $nom = $_POST["nom"] ?? "";
            $email = $_POST["email"] ?? "";

            echo "Avec htmlspecialchars : ";
            echo "Bonjour " . htmlspecialchars($nom) . " (" . htmlspecialchars($email) . ")";

            echo "<br><br>";

            echo "Sans htmlspecialchars : ";
            echo "Bonjour " . $nom . " (" . $email . ")";
        ?>
    </body>
</html>
