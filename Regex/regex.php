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

            <!-- Accolades -->

 <p>
    <?php
        if(preg_match("#a{3}#", "aaaaa")){
            echo "Il y a 3 'a' ou +.";
        }else{
            echo "Il y a moins de 3 'a'." ;
        }
    ?>
</p>

<p>
    <?php
        if(preg_match("#a{1,3}#", "aaaaaaaaa")){
            echo "Il y a entre 1 et 3 'a'.";
        }else{
            echo "Il y a plus de 3 'a'." ;
        }
    ?>
</p>

            <!-- Construire un Regex pour les numéros de téléphone -->


<p>
    <?php
    $num = "01-20-24-10-19";
        if(preg_match("#^0[1-6]([-. ]?[0-9]{2}){4}$#", $num)){
            echo "ça fonctionne.";
        }else{
            echo "ça ne fonctionne pas" ;
        }
    ?>
</p>

            <!-- Capture et remplacement -->
<p>
    <?php
    $texte = "baaab";
        if(preg_replace('#\[b\](.+)\[/b\]#i', '<strong>$1</strong>', $texte)){
            echo $texte;
        }else{
            echo "pas ok";
        }
    ?>
</p>

</body>
</html>