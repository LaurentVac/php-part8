<?php
// On démarre une nouvelle session
session_start();
//definir session de démarrage
$_SESSION['firstName'] = 'Laurent';
$_SESSION['lastName'] = 'Vaché';
$_SESSION['age'] = 28;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 part 8</title>
</head>
<!-- Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur -->
<body>
<!-- afficher user agent -->
<p> User Agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
<!-- afficher adresse ip visiteur -->
<p> Adresse ip : <?= $_SERVER['REMOTE_ADDR'] ?> </p>
<!-- afficher nom  du serveur -->
<p>Nom du serveur : <?= $_SERVER['SERVER_NAME'] ?></p>
<a href="page2.php"><strong>Cliquez ici</strong></a>

    
</body>
</html>