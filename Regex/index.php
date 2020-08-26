<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <!-- Rechercher un mot -->
<p>
    <?php 
        if(preg_match("#test#","C'est un test")){
            echo "le mot 'test' a était trouvé.";
        }else{
            echo "y'a un problème.";
        }
    ?>
</p>

        <!-- Rechercher un mot (attention à la casse)-->
<p>
    <?php
        if(preg_match("#Test#","C'est un test")){
            echo "le mot 'test' a était trouvé.";
        }else{
            echo "Les mots sont sensibles à la casse.";
    }
    ?>
</p>

        <!-- Rechercher un mot (peut importe la casse)-->
<p>
    <?php
        if(preg_match("#Test#i","C'est un test")){
            echo "le mot 'test' a était trouvé sans problème de casse.";
        }else{
            echo "Les mots sont sensibles à la casse.";
    }
    ?>
</p>
</body>
</html>