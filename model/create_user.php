<?php

require_once './config/configBDD.php';
require_once './ressource/rb-mysql.php';

R::setup('mysql:host=localhost;dbname=fil_rouge','root','');

$user = R::dispense( 'user' );

$user->username = $uname;
$user->password = $psw;
$user->date_creation = '';

$id = R::store( $user );

