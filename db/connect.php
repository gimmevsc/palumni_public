<?php
include("./env/env.php");

if(isLocalhost()){
    $servername = $_ENV['SERVERNAME_LOCAL'];
    $username = $_ENV['USERNAME_LOCAL'];
    $password = $_ENV['PASSWORD_LOCAL'];
    $dbname = $_ENV['DB_NAME_LOCAL'];
    $port = $_ENV['PORT_LOCAL'];
}else{
    $servername = $_ENV['SERVERNAME'];
    $username = $_ENV['USERNAME'];
    $password = $_ENV['PASSWORD'];
    $dbname = $_ENV['DB_NAME'];
    $port = 3306;
}


// Create connection
$db = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$db->set_charset("utf8mb4");

?>
