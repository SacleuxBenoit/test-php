<?php 
session_start();
include('hide.php');
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
    <form method="post" action="phone_number.php">
        <p>
            <label for="phone_number">Quel est votre numéro ?</label>
                <input id="phone_number" name="phone_number" />
        </p>

        <p>
            <input type="submit" value="Vérifier le numéro" />
        </p>

    </form>

<?php
    if(isset($_POST['phone_number'])){
        $_POST['phone_number'] = htmlspecialchars($_POST['phone_number']);
    }

    if(preg_match("#^0[1-6]([-. ]?[0-9]{2}){4}$#", $_POST['phone_number'])){
        echo "Le numéro est validé";
    }else{
        echo "Il y a eu une erreur";
    }
?>
</body>
</html>