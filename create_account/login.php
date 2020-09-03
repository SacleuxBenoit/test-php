<?php 
session_start();
include('hide.php');
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
    <h1>Pour vous connecter, veuillez remplir le formulaire ci-dessous</h1>

        <form action="./database/connexion_database.php" method="post">
            <p>
                <label for="loginEmail">Email :</label>
                <input type="email" name="loginEmail" id="loginEmail">
            </p>

           <p>
                <label for="loginPassword">Password :</label>
                <input type="password" name="loginPassword" id="loginPassword">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>
</html>