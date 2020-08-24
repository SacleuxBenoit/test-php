<?php
session_start();

include("hide.php");
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
    <form action="new_data.php" method="post">
        <p>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name">
        </p>

        <p>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username">
        </p>

            <input type="submit" value="submit">
    </form>
</body>
</html>