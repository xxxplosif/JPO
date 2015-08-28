<?php
        
    if(isset($_POST['generate']) && ctype_digit($_POST['min_length']) && ctype_digit($_POST['max_length'])){

        $min_length = $_POST['min_length'];
        $max_length = $_POST['max_length'];

        if($min_length > $max_length){
            die('impossible d\'insérer une longuer minimale plus grande qu\'une longueur maximale');
        }

        include 'pwdGenerator.php';

        $password = pwdGenerator($min_length, $max_length);
        
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Générateur de mots de passe aléatoires</title>
    </head>
    <body>
        <h1><a href="./">Générateur de mots de passe aléatoires</a></h1>
        <form action="" method="POST">
            <span>Longueur aléatoire</span>
            <input type="number" min="1" max="100" name="min_length" placeholder="longeur minimale" required <?php if(isset($min_length)) echo 'value="'.$min_length.'"'; ?>/>
            <input type="number" min="1" max="100" name="max_length" placeholder="longeur maximale" required <?php if(isset($max_length)) echo 'value="'.$max_length.'"'; ?>/>
            <input type="submit" value="Générer" name="generate"/>
        </form>
        
        <h3>
        <?php 
            if(isset($password)){
                
                echo $password;  
                
            }else{
                
                echo '** Le mot de passe s\'affichera ici **';
                
            }
        ?>
        </h3>
        
        <hr />
        
        <h2>Sommaire</h2>
        <ul>
            <li><a href="#why">À quoi sert un générateur de mots de passe aléatoires ?</a></li>
            <li><a href="#code">Le code source du générateur</a></li>
            <li><a href="#ascii">Aller plus loin : que-ce-que un ASCII code ?</a></li>
        </ul>
        
        <hr />
        
        <h3 id="why">À quoi sert un générateur de mots de passe aléatoires ?</h3>

        <p>
            Un générateur de mots de passe aléatoires permet, par exemple, lors de l'inscription d'un utilisateur, de <strong>créer un mot de passe temporaire</strong> pour un nouvel utilisateur, qu'on peut ensuite envoyer par e-mail à ce même utilisateur. Le champs des possibilités offertes par cette fonction est plus grand : on pourraît utiliser cette fonction pour <strong>générer des identifiants uniques</strong> ou des noms d'images pour les stocker de façon sécurisée sur un serveur.<br />
        </p>
        
        <p>
            <mark>
            Quand un client oublie son mot de passe, vous ne pouvez pas lui renvoyer le mot de passe d'origine : ce serait une très grande faille de sécurité ! Non, à la place vous allez <b>générer un mot de passe aléatoirement</b> et vous allez lui envoyer son nouveau mot de passe par email.
            </mark>
        </p>

        <p>
            Le fait d'avoir inclus ce code dans une <strong>fonction</strong> fait que ce code est <strong>réutilisable</strong>: vous pouvez, si vous le souhaitez, l'inclure dans un de vos projets, la modifier, etc.
        </p>
        
        
        
        <h3 id="code">Bienvenue dans la Matrice !</h3>

        <p>
            <mark>
            Ça, c'est que vous allez faire durant toute la formation : du PHP, du PHP, du PHP !
            </mark>
        </p>

        <h2>PHP, késako ?</h2>

        <p><b>PHP</b> est un langage de programmation qui se cache derrière la plupart des sites internet : par exemple, Facebook utilise PHP.</p>
        
        <div style="background-color:lightgoldenrodyellow; padding:10px;"><?php echo highlight_file("pwdGenerator.php", true) ?></div>
        
        <h3 id="ascii">Aller plus loin : que-ce-que un ASCII code ?</h3>
        
        <p>L'ASCII est un standard qu'utilisent les ordinateurs pour gérer du texte. Un ordinateur, en effet, doit 'traduire' les lettres pour les manipuler ; ainsi le chiffre 97 correspondra à la lettre 'a', 98 à la lettre 'b' : chaque chiffre, et chaque symbôle typographique a un code décimal correspondant.</p>
        
        <p><b>[ENGLISH]</b></p>

        <p>
            ASCII stands for American Standard Code for Information Interchange. Computers can only understand numbers, so an ASCII code is the numerical representation of a character such as 'a' or '@' or an action of some sort. ASCII was developed a long time ago and now the non-printing characters are rarely used for their original purpose. Below is the ASCII character table and this includes descriptions of the first 32 non-printing characters. ASCII was actually designed for use with teletypes and so the descriptions are somewhat obscure. If someone says they want your CV however in ASCII format, all this means is they want 'plain' text with no formatting such as tabs, bold or underscoring - the raw format that any computer can understand. This is usually so they can easily import the file into their own applications without issues. Notepad.exe creates ASCII text, or in MS Word you can save a file as 'text only'. <br />
            - Source : <a href="http://www.asciitable.com/">Ascii Tables</a>
        </p>
        
        <img src="ascii.gif" alt="ascii table"/>

    </body>
</html>
