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
    <div>
        <p>Vous venez de vous inscrire avec les identifiants suivants :</p>
        <p>Nom : <?php echo $_SESSION['last_name'] ?></p>
        <p>Prénom : <?php echo $_SESSION['first_name'] ?></p>
        <p>Email : <?php echo $_SESSION['email'] ?></p>
    </div>
</body>
</html>