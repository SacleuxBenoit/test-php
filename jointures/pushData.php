<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addToInfo.php" method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        </p>

        <p>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
        </p>

            <input type="submit" value="Submit">
    </form>

    <form action="addToJeux.php" method="post">
        <p>
            <label for="nameGame">Nom du jeux</label>
            <input type="text" id="nameGame" name="nameGame">
        </p>

        <p>
            <label for="console">Console</label>
            <input type="text" id="console" name="console">
        </p>

            <input type="submit" value="Submit">
    </form>
</body>
</html>