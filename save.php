<?php
include 'config.php';

$student_id=$_POST['student_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$faculty=$_POST['faculty'];
$major=$_POST['major'];
$year=$_POST['year_level'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$midterm=$_POST['midterm_score'];
$final=$_POST['final_score'];
$attendance=$_POST['attendance'];
$assignment=$_POST['assignment_score'];

$total=$midterm+$final+$attendance+$assignment;

if($total>=80){$grade='A';}
elseif($total>=70){$grade='B';}
elseif($total>=60){$grade='C';}
elseif($total>=50){$grade='D';}
else{$grade='F';}

$sql="INSERT INTO students
(student_id,first_name,last_name,gender,faculty,major,year_level,email,phone,midterm_score,final_score,attendance,assignment_score,total_score,grade)
VALUES
('$student_id','$first_name','$last_name','$gender','$faculty','$major','$year','$email','$phone','$midterm','$final','$attendance','$assignment','$total','$grade')";

mysqli_query($conn,$sql);

header("location:index.php");
?>
