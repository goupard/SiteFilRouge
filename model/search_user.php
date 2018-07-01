<?php

require_once './config/configBDD.php';
require_once './ressource/rb-mysql.php';

R::setup('mysql:host=localhost;dbname=fil_rouge','root','');

$user = R::findOne(
    'user', ' username = ? and password = ?', [ $uname , $psw] );


