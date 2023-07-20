<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "pizaa";


$conn = mysqli_connect($server,$username,$password,$db);

if (!$conn){
    echo "connection error";

}
?>