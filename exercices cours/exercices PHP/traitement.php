<html>
    <head>
        <title>my php page </title>
</head>
<body>
    <h1>welcome to my php page</h1>
    <?PHP
    $nom = $_POST["nom"] ?? "";
echo "Bonjour " . htmlspecialchars($nom);
?>

</body>
</html>
