<?php
// conn.php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "expert_garage";

$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>