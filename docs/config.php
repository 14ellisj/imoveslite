<?php
$hostname = 'imoves.mysql.database.azure.com';
$username = 'admin1';
$password = 'BOBicus1';
$database = 'pick-l';
/* Attempt to connect to MySQL database */
$mysqli = new mysqli($hostname, $username, $password, $database);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>