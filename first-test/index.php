<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <p>
        <?php echo date('d/m/y h:i:s');

        // commentaire mono-ligne

        /*
        commentaire
        multi-ligne
        */
        $age = 22;
        echo $age;
        ?>

        <p>
            <?php 
                    echo "Le visiteur à $age ans";
                    echo 'Le visiteur à' . $age . " ans";

                    if($age >= 18){
                        $message = "vous pouvez entrer";
                    }else{
                        $message = "vous ne pouvez pas entrer";
                    }

                echo $message;

                $code = 20;
                if($code == 20){
                    {

                   
                }
            ?>
            <p>Ceci est un test pour afficher du text avec un if() en dehors du PhP</p>
            <?php
             }
            $name = array ('Benoît', 'Charlotte', 'Gérard');
            
            echo $name[1];

            $newArray = array(
                'name' => "Benoît",
                'adresse' => "Mars",
                'age' => 22,
            );

            echo $newArray['adresse'];

            for($i = 0; $i < 3; $i++){
                echo $name[$i] . '<br />';
            };
            ?>
             
        </p>
    </p>
</body>
</html>