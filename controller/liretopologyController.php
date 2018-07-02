<?php

require_once './config/callAPI.php';

echo $_GET['file'];

CallAPI("POST","http://localhost:5000/load_topologie?file=".$_GET['file']);