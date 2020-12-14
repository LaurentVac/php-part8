<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2 part 8</title>
</head>
<body>
<!-- Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page. -->
<p>Mon prénom : <?=$_SESSION['firstName'] ?></p>
<p>Mon nom : <?=$_SESSION['lastName'] ?></p>
<p>Mon âge : <?=$_SESSION['age'].' ans' ?></p>
    
</body>
</html>