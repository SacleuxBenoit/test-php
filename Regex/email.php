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
        if(preg_match("#^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$#", "test@test.com")){
            echo "ok";
        }else{
            echo "pas ok";
        }
    ?>
</body>
</html>