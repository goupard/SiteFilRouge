<?php
if(!empty($_POST['uname']) && !empty($_POST['psw']) && !empty($_POST['psw2'])){
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $psw2 = $_POST['psw2'];
    
    if($psw == $psw2){
          // SQL de vérification du compte
        include './model/create_user.php';
    
        if(!is_null($id)){
          header('Location: http://localhost/SiteFilRouge/index.php');
      }
    }
}

include './view/login/signin.php';

