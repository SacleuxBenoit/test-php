<?php
session_start();

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo " <h3> Hello " . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "</h3>";
    ?>
</body>
</html>