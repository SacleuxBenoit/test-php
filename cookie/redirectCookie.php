<?php 
setcookie('user_email', $_POST['email'], time() + 24 * 3600);
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
    <?php
    if(isset($_COOKIE['user_email'])){
        echo 'Votre adreesse email est : ' . htmlspecialchars($_COOKIE['user_email']);
    }else{
        echo "Aucune addresse email n'a était renseignée.";
    }
    ?>
</body>
</html>