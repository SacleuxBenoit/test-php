<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Bienvenue <?php echo $_POST['pseudo']; ?>
    tu peux modifier ton pseudo en cliquant <a href="index.php">ici</a>
    </p>

    <p>Voici votre commentaire : <?php echo $_POST['message']; ?></p>

    <p>pour l'attribut select : <?php echo $_POST['country']; ?> a été choisi.</p>
</body>
</html>