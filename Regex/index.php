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
    if(preg_match("#test#","C'est un test")){
        echo "le mot 'test' a était trouvé";
    }else{
        echo "y'a un problème";
    }
    ?>
</body>
</html>