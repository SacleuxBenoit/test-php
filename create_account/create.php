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

    <div>
        <form action="hello.php" method="post">
            <p>
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" id="last_name">
            </p>

            <p>
                <label for="first_name">First name</label>
                <input type="text" name="first_name" id="first_name">
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </p>

                <input type="submit" value="Validate">

        </form>
    </div>





    <?php 
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    ?>
</body>
</html>