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

        <!-- Rechercher un mot avec le symbole | -->
<p>
    <?php
        if(preg_match("#World|Warcraft#i","C'est un test")){
            echo "le mot 'World' ou 'warcraft' a était trouvé.";
        }else{
            echo "impossible de trouver 'World' ou 'Warcraft' ";
    }
    ?>

            <!-- Rechercher un mot avec le symbole ^ -->
<p>
    <?php
        if(preg_match("#^Bienvenue#i","Bienvenue dans World Of Warcraft")){
            echo "Le premier mot commence par Bienvenue.";
        }else{
            echo "Le premier mot ne commence pas par Bienvenue.";
    }
    ?>
</p>

            <!-- Rechercher un mot avec le symbole $ -->
<p>
    <?php
        if(preg_match("#Warcraft$#i","Bienvenue dans World Of Warcraft")){
            echo "Le dernier mot est : Warcraft.";
        }else{
            echo "Le denier mot n'est pas : Warcraft.";
    }
    ?>
</p>

            <!-- classe de caractères -->

<p>
    <?php
        if(preg_match("#gr[iao]#", "Le chat est gris")){
            echo "C'est good";
        }else{
            echo "C'est pas good" ;
        }
    ?>
</p>

            <!-- Intervalles de classe -->

<p>
    <?php
        if(preg_match("#[7-9]#", "vous avez eu un 8")){
            echo "Le résultat est bon.";
        }else{
            echo "Le résultat est insufisant." ;
        }
    ?>
</p>

            <!-- ne peut prendre en compte un intervalle de classe -->

<p>
    <?php
        if(preg_match("#[^0-9]#", "vous avez eu un 8")){
            echo "Le résultat est bon.";
        }else{
            echo "Le résultat est insufisant." ;
        }
    ?>
</p>

            <!-- Quantificateurs -->

<p>
    <?php
        if(preg_match("#7+#", "vous avez eu un 8")){
            echo "Le résultat est bon.";
        }else{
            echo "Le résultat est insufisant." ;
        }
    ?>
</p>

<p>
    <?php
        if(preg_match("#bor?is#", "bois")){
            echo "Il n'y a pas de problème.";
        }else{
            echo "un problème est survenue." ;
        }
    ?>
</p>
</body>
</html>