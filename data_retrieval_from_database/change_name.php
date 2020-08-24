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
    <p>Vous venez de modifier vos informations pour : </p>
    <p>Name : <?php echo $_POST['edit_name'] ?></p>
    <p>Username : <?php echo $_POST['edit_username'] ?></p>

    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        $update_bdd = $bdd->prepare('UPDATE recupData SET name=?, username=? WHERE ID = 26');
        $update_bdd->execute([$_POST['edit_name'], $_POST['edit_username']]);
    ?>
</body>
</html>