<?php
$host="localhost";
$user="root";
$pass="";
$db="instagram_db";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){ die("Database connection failed"); }
?>