<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('connection_database.php');
    ?>

    <form action="addToDatabase.php" method="post">
        <p>
            <label for="nameInput">Name</label>
            <input type="text" name="nameInput" id="nameInput">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>