<?php

session_start();

include './view/header.html';

if (!empty($_GET['page']) && is_file('controleur/'.$_GET['page'].'.php'))
{
        include 'controller/'.$_GET['page'].'.php';
}
else
{
        include 'controller/loginController.php';
}

include './view/footer.html';
?>

