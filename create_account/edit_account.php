<?php
session_start();
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
    <form method="post" action="edit_account.php">
        <p>
            <label for="last_name">Nom</label>
                <input id="last_name" name="last_name" value="<?php echo $_SESSION['last_name']?>">
        </p>

        <p>
            <label for="first_name">Prénom</label>
                <input id="first_name" name="first_name" value="<?php echo $_SESSION['first_name']?>">
        </p>

        <p>
            <label for="email">email</label>
                <input id="email" name="email" value="<?php echo $_SESSION['email']?>">
        </p>    
    </form>

</body>
</html>