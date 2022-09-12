
<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movietime";



$servername = "sql212.epizy.com";
$dbname = "epiz_29782423_movie";
$password = "sUGIyi5GjD";
$username = "epiz_29782423";





$servername = "sql109.epizy.com";
$dbname = "epiz_31653349_BookHub";
$password = "asRCBPwZvk";
$username = "epiz_31653349";


$servername = "sql212.epizy.com";
$dbname = "epiz_29782423_movie";
$password = "sUGIyi5GjD";
$username = "epiz_29782423";



*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movietime";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>