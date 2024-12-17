<?php
if(isLocalhost()){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "palumni";
}else{
    $servername = "host";
    $username = "username";
    $password = "password";
    $dbname = "db_name";

}


// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$db->set_charset("utf8mb4");

?>
