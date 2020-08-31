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
        <form action="change_name.php" method="post">
            <p>
                <label for="edit_name">Modifier le nom :</label>
                <input type="text" name="edit_name" id="edit_name">
            </p>

            <p>
                <label for="edit_username">Modifier le pseudo :</label>
                <input type="text" name="edit_username" id="edit_username">
            </p>

                <input type="submit" value="submit">
        </form>
    </div>

    <?php 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        $add_data = $bdd->prepare('INSERT INTO recupData(nom,pseudo) VALUES(:nom, :username)');
        $add_data->bindParam(':nom', $_POST['name']);
        $add_data->bindParam(':username', $_POST['username']);
        $add_data->execute();

    ?>

</body>
</html>