<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "licenta";

$link = mysqli_connect($servername,$username, "",$dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//echo "Connected successfully";
?>