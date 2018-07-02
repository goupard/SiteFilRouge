<?php
$message = '';

if(!empty($_POST['uname']) && !empty($_POST['psw'])){
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    
    // SQL de vérification du compte
    include './model/search_user.php';
    
    if(is_null($user)){
        $message = "Le nom d'utilisateur et le mot de passe que vous avez entrés ne correspondent pas à ceux présents dans nos fichiers. Veuillez vérifier et réessayer.";
    }
    else{
        if($user->admin == true){
            header('Location: http://localhost/SiteFilRouge/index.php?page=loadtopology');
        }
        else{
            header('Location: http://localhost/SiteFilRouge/index.php?page=accessdn');
        }  
    }
}

include './view/login/login.php';

