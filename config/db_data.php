<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass ="";
$dbName = "doanphp";
global $conn;

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if($conn){
    $setLang = mysqli_query($conn, "Set Names 'utf8'");
}
else{
    die("kết nối thất bại!".mysqli_connect_error());
}
?>