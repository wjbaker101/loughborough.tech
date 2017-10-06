<?php
 
$host = $_SERVER['RDS_HOSTNAME'];
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
$port = $_SERVER['RDS_PORT'];
$database = $_SERVER['RDS_DB_NAME'];

$connection = new mysqli($host, $username, $password, $database, $port);

?>