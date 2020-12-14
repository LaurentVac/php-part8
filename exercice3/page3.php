<!-- //     Exercice 5Devoir
// Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3 -->
    <?php
    if(!empty($_COOKIE['user_login']) && !empty($_COOKIE['user_password'])){
        setcookie('user_login', 'Pascal');
        setcookie('user_password','555');
        $_COOKIE['user_login'] = 'Pascal';
        $_COOKIE['user_password'] = '555';
        echo 'Le cookie user_login : ' .$_COOKIE['user_login'] . '; Le cookie user_password : '.$_COOKIE['user_password'];
    }
        
    ?>