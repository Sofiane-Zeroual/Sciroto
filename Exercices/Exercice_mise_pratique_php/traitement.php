<?php
$serveur = "127.0.0.1";
$utilisateur = "root";
$motdepasse = "";
$base = "test";

$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$nom = $_POST['nom'];
$date_naissance = $_POST['date_naissance'];
$telephone = $_POST['telephone'];

$requete = "INSERT INTO user (nom, date_naissance, telephone)
            VALUES ('$nom', '$date_naissance', '$telephone')";

if (!$connexion) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (mysqli_query($connexion, $requete)) {
    echo "Utilisateur ajouté avec succès.";

} else {
    echo "Utilisateur n'a pas été ajouté.";
    echo "Erreur : " . mysqli_error($connexion);
}

mysqli_close($connexion);
?>