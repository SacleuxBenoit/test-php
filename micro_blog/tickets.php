<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="blog.php">
        <p>
            <label for="titre">Pseudo</label>
            <input type="text" name="titre" id="titre">
        </p>

        <p>
            <label for="contenu">Contenu</label>
            <input type="text" name="contenu" id="contenu">
        </p>

        <p>
        <input type="button" value="Valider">
        </p>
    </form>
</body>
</html>