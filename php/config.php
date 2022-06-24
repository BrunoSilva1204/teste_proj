<?php

//$dbServerName = "cp1.improveinternational.pt";
$dbServerName = "localhost";
//$dbUsername = "improve_test_user";
$dbUsername = "root";
//$dbPassword = "cyXiJ9?pL47&";
$dbPassword = "";
//$dbName = "improve_test_1";
$dbName = "improve_test_1";

$con = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}