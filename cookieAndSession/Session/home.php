<?php
session_start();
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
        echo " <h3> Hello " . htmlspecialchars($_SESSION['nom'])  . " " .  htmlspecialchars($_SESSION['prenom']) . "</h3>";
    ?>
</body>
</html>