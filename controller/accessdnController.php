<?php

require_once './config/callAPI.php';

if(!empty($_POST['ip'])){
    CallAPI("POST","http://localhost:5000/send_ip?ip=".$_POST['ip']);
}

include './view/accessdn/accessdn.php';