<?php 

$hostname = "localhost";
$username = "koerbler_bettina";
$password = "aPxg.GU$K;im";
$dbname = "koerbler_sewing_db";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

//  check connection
// if($connect->connect_error) {
//     die("Connection failed: " . $connect->connect_error);
// }else {

//     echo "Successfully Connected";

// }