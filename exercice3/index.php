<?php
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $pass = $_POST['password'];
        //je stock les cookies 
        setcookie('user_login',$login);
        setcookie('user_password',$pass);
        
        $_COOKIE['user_login'] = $_POST['login']  ;
        $_COOKIE['user_password'] = $_POST['password'];
        echo 'Mon pseudo est : '.$_COOKIE['user_login']. ' Mon mot de passe : '.$_COOKIE['user_password'] ;
       
    }else{
        echo 'recommence';
    }
  
 
  ?>
      
        
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3 part 8</title>
</head>
<body>
<!-- Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie -->
 <form action="index.php" method="post">
 <input type="text" name="login"/> <br> <br>
 <input type="password" name="password"/> <br> <br>
<input type="submit"/>
 </form>
<?php
    // if(!empty($_POST['login']) && !empty($_POST['password'])){
    //     $login = $_POST['login'];
    //     $pass = $_POST['password'];
    //     $cookieLogin = setcookie('user_login',$login);
    //     $cookiePass = setcookie('user_password',$pass);
    //     echo 'Mon pseudo est : '.$_COOKIE['user_login']. ' Mon mot de passe : '.$_COOKIE['user_password'] ;
       
    // }else{
    //     echo 'recommence';
    // }

        
    
    ?>
    
</body>
</html>