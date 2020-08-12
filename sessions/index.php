<?php
session_start();
$_SESSION['prenom'] = "Gérard";
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
    <p>
        Salut <?php echo $_SESSION['prenom'];?>.
    </p>
    <p>Ici tu peux naviguer sur une <a href="informations.php">autre page </a> tout en gardant tes identifiants </p>
</body>
</html>