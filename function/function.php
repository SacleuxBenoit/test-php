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
    // strlen

    $phrase = "Test pour avoir le nombre de caractères dans cette phrase" . '<br />';
    echo $phrase;
    $longueur = strlen($phrase);
    echo 'Il y a ' . $longueur . ' caractères dans la phrase ci-dessus' . '<br />';

    // str_replace

    $result = str_replace('u', 'o', "flour" );
    echo $result; // flour => floor

    // str_shuffle
    $dog = "chien";
    $shuffleDog = str_shuffle($dog);
    echo $shuffleDog; // mélange les lettres

    // strtolower && strtoupper

    $textUpper = "UN TEXTE EN MAJSCULE";
    $lowerText = strtolower($textUpper);
    echo $lowerText;

    $textlower = "un texte en minuscule";
    $upperText = strtoupper($textlower);
    echo $upperText;

    // date

    $year = date('yy');
    echo $year;

    $date = date('d/m/y');
    echo $date;
    ?>

    
</body>
</html>