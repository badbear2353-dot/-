<?php
include 'config.php';
$id=$_GET['id'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM students WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Edit Student</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<input class="form-control mb-2" name="first_name" value="<?= $data['first_name'] ?>">
<input class="form-control mb-2" name="last_name" value="<?= $data['last_name'] ?>">
<input class="form-control mb-2" name="midterm_score" value="<?= $data['midterm_score'] ?>">
<input class="form-control mb-2" name="final_score" value="<?= $data['final_score'] ?>">

<button class="btn btn-primary">Update</button>

</form>
</body>
</html>
