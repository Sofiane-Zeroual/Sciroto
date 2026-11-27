<?php

session_start();

$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

session_unset();

if ($name != null) $_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site web Sciroto</title>
    <link rel="stylesheet" href="<?= $css ?>">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#page_accueil" class="logo">
            <img src="<?= $logo_clair ?>" alt="Sciroto"> 
        </a>
        <button type="button" class="menu-toggle" aria-label="Ouvrir le menu" aria-controls="primary-navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="primary-navigation">
            <a href="#page_accueil">Page d'accueil</a>

            <a href="#a_propos">A propos</a>
            
            <a href="#comparateur">Comparateur</a>
            
            <a href="#forum">Forum</a>
            
            <a href="#contact">Contact</a>
        </nav>

        <div class="user-auth">
            <?php if (!empty($name)): ?>
            <div class="profile-box">
                <div class="avatar-circle"><?= strtoupper($name[0]); ?></div>
                <div class="dropdown">
                    <a href="Page/page_utilisateur.php">Mon compte</a>
                    <a href="Page/mon_garage.php">Mon garage</a>
                    <a href="Page/mon_garage_revves.php">Mon garage des RÊVVES</a>
                    <a href="logout.php">Se déconnecter</a>
                </div>
            </div>
            <?php else: ?>
                <button type="button" class="login-btn-modal">Se connecter</button>
            <?php endif; ?>
        </div>

    </header>

