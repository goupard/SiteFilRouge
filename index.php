<?php

session_start();

include './view/header.html';

if (!empty($_GET['page']) && is_file('./controller/'.$_GET['page'].'Controller.php'))
{
        include './controller/'.$_GET['page'].'Controller.php';
}
else
{
        include './controller/loginController.php';
}

include './view/footer.html';
?>

