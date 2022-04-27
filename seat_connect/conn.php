<?php
$hostname = "127.0.0.1";
$username = "root";
$pwd = "";
$db = "fyp_ticket";

function getDBconnection(){
    global $hostname, $username, $pwd, $db;
    $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
    return $conn;
}
?>