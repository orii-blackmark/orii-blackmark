<?php

$server="localhost";
$user="root";
$pass="";
$database="login_subscribers";

$conn=mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("<script>alert('connection failed.')</script>");
}
?>