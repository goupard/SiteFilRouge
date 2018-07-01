<?php

if(!empty($_POST['uname']) && !empty($_POST['psw'])){
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    
    // SQL de vérification du compte
    include './model/create_user.php';
}

include './view/login/login.html';

