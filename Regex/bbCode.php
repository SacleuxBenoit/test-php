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
        if (isset($_POST['texte']))
        {
            $texte = stripslashes($_POST['texte']);
            $texte = htmlspecialchars($texte);
            $texte = nl2br($texte); // create <br />
            
            // part regex
            $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
            $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
            $texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $texte);
            $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

            echo $texte . '<br /><hr />';
        }
    ?>

<p>Ci-dessous on peut utiliser le BBcode par exemple : </p>

<blockquote style="font-size:0.8em">
    <p>
        [b]Bienvenu[/b],sur mon [i]Github[/i] https://github.com/SacleuxBenoit .<br />
        on peut aussi utiliser les [b][color=green]couleurs[/color][/b].
    </p>
</blockquote>


    <form method="post">
        <p>
            <label for="texte">A vous de jouer !</label><br />
            <textarea id="texte" name="texte" cols="50" rows="8"></textarea><br />
            <input type="submit" value="Valider" />
        </p>
    </form>
    
</body>
</html>