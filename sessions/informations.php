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
    <p>Bienvenue sur la nouvelle page <?php echo $_SESSION['prenom'] ?></p>
    <p>tu peut revenir sur l'ancienne page <a href="index.php">ici</a></p>
</body>
</html>