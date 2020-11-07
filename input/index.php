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
        <!--
           <p>Send Input to database</p> 

        <p>
            <label for="nameInput">Name</label>
            <input type="text" name="nameInput" id="nameInput">
        </p>

            <p>Send Input type radio to database</p> 

            <h1>Who are you ?</h1>

        <p>
            <label for="male">Male</label>
            <input type="radio"  name="gender" id="male" value="male">
        </p>

        <p>
            <label for="female">female</label>
            <input type="radio" name="gender" id="female" value="female">
        </p>

        <p>
            <label for="robot">Robot</label>
            <input type="radio" name="gender" id="robot" value="robot">
        </p>

        <p>
            <label for="game">Game :</label>
            <input type="text" name="game" id="game" value="game">
        </p> -->

        <p>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>