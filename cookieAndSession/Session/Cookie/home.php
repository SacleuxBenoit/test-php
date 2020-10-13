<?php
setcookie('nom', $_POST['nom'], time() + 365*24*3600, null, null, false, true);
setcookie('prenom', $_POST['prenom'], time() + 365*24*3600, null, null, false, true);
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
        echo "Hello" . " " . $_COOKIE['nom'] . " " . $_COOKIE['prenom'];
    ?>
</body>
</html>