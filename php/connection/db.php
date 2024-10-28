<?php
$server =  "162.241.2.39";
$username = "itsonapp_244441";
$password = "244441db#536W";
$dbname = "162.241.2.39";

$connection = new mysqli($server, $username, $password, $dbname);
$connection->set_charset("utf8");
if($connection->connect_error){
    die("Falló la conexión: ".$connection->connect_error);
}
?>