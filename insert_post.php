<?php
include 'config.php';
$username=$_POST['username'];
$caption=$_POST['caption'];
$location=$_POST['location'];
$hashtags=$_POST['hashtags'];
$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$image);
$sql="INSERT INTO posts(username,caption,location,hashtags,image,likes,comments_count,post_date,post_time,device,privacy,status)
VALUES('$username','$caption','$location','$hashtags','$image','0','0',CURDATE(),CURTIME(),'Web','Public','Active')";
mysqli_query($conn,$sql);
header("location:index.php");
?>