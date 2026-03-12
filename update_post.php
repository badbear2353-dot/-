<?php
include 'config.php';
$id=$_POST['id'];
$username=$_POST['username'];
$caption=$_POST['caption'];
mysqli_query($conn,"UPDATE posts SET username='$username',caption='$caption' WHERE id=$id");
header("location:index.php");
?>