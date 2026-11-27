<html>
    <head>
        <title>my php page </title>
</head>
<body>
    <h1>welcome to my php page</h1>
    <?PHP
    $nom = $_POST["nom"] ?? "";
    $email = $_POST["email"] ?? "";
echo "Bonjour " . htmlspecialchars($nom) . " (" . htmlspecialchars($email) . ")";
?>

</body>
</html>