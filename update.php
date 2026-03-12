<?php
include 'config.php';

$id=$_POST['id'];
$first=$_POST['first_name'];
$last=$_POST['last_name'];
$mid=$_POST['midterm_score'];
$final=$_POST['final_score'];

$total=$mid+$final;

mysqli_query($conn,"UPDATE students SET
first_name='$first',
last_name='$last',
midterm_score='$mid',
final_score='$final',
total_score='$total'
WHERE id=$id");

header("location:index.php");
?>
