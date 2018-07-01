<?php

require_once './config/callAPI.php';

echo $_GET['file'];

CallAPI("POST","http://localhost:5000/nomAPI/laodTopologie?file=".$_GET['file']);