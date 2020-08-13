<?php 
    setcookie("username","Totor", time() + 24 * 3600, null, null, false, true);
    setcookie("age","22", time() + 24 * 3600, null, null, false, true)
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

    <p>la valeur dans le cookie 'username' est : <?php echo $_COOKIE['username'] ?></p>
    <p>pour ce qui est du cookie 'age' : <?php echo $_COOKIE['age'] ?></p>
    
</body>
</html>