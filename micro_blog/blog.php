<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', "root", $_SESSION['pass']);
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $blog = $bdd->query("SELECT titre, contenu FROM micro_blog");

    while($donnees = $blog->fetch()){
    ?>
    <div class="news">
        <h1>
            <?php echo htmlspecialchars($donnees['titre'])?>
        </h1>

        <p class="content">
            <?php echo htmlspecialchars($donnees['contenu']) ?>
        </p>
    </div>
    <?php
    }

    ?>
</body>
</html>