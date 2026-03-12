<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Student CRUD System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Student Management System</h2>
<a href="add.php" class="btn btn-primary">Add Student</a>

<table class="table table-bordered mt-3">
<tr>
<th>ID</th>
<th>Student ID</th>
<th>Name</th>
<th>Midterm</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php
$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['student_id'] ?></td>
<td><?= $row['first_name']." ".$row['last_name'] ?></td>
<td><?= $row['midterm_score'] ?></td>
<td><?= $row['total_score'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>

<?php } ?>

</table>

</body>
</html>
