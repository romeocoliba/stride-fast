<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "stride";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
