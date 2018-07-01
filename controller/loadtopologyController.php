<?php
    
$dossier_gml = 'C:/Users/Maxime/Desktop/gml/';

if(!empty($_POST['file'])){
    
    $file = $_POST['file'];
    $name = basename($file);
    copy($file, $dossier_gml.$name);
    
}

$files = scandir($dossier_gml);

include './view/topology/load.php';
