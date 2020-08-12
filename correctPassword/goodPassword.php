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
    if($_POST['pass'] == "test"){
        echo "congratulation !";
    }else{
        echo "This is the wrong password try again" ?> <a href="index.php">here</a>;
        <?php
    }

    ?>

    
</body>
</html>