<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD','Goffi#6778#875$');
DEFINE ('DB_HOST', '117.53.46.126');
DEFINE ('DB_NAME', 'osticket');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$dbc){
    die('error connecting to database: ' . mysqli_connect_error());    
}
?>
