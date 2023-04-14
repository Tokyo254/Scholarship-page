<?php


$host = "localhost";
$dbname = "test1";
$username = "root";
$password = "";

$mysqli = new mysqli($host,$username,$password,$dbname);

if ($mysqli -> connect_errno) {
    die("Connection error: " . $mysqli -> connect_errno);
}

return $mysqli;
?>