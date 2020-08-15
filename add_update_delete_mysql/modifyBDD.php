<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    // Créer

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires)
            VALUES(\'World of warcraft\', \'Benoît\', \'PC\', 45, 999, \'Un jeu incontournable\')');

        // UPDATE

    $bdd->exec('UPDATE jeux_video SET prix = 13 WHERE nom = \'World of warcraft\'')
    
    ?>
</body>
</html>