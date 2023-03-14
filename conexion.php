<?php


$mysql_host = "localhost";
$mysql_usuario ="root";
$mysql_password = "rootpass";
$mysql_bd = "akinator";


$enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_bd);

if(mysqli_connect_errno()){
    printf("Fallo la conexion %s\n",mysqli_connect_errno());
    exit();
}

mysqli_set_charset($enlace, 'utf8');


?>