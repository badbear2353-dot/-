<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Add Student</h2>

<form action="save.php" method="post">

<input class="form-control mb-2" name="student_id" placeholder="Student ID">
<input class="form-control mb-2" name="first_name" placeholder="First Name">
<input class="form-control mb-2" name="last_name" placeholder="Last Name">
<input class="form-control mb-2" name="gender" placeholder="Gender">
<input class="form-control mb-2" name="faculty" placeholder="Faculty">
<input class="form-control mb-2" name="major" placeholder="Major">
<input class="form-control mb-2" name="year_level" placeholder="Year">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="phone" placeholder="Phone">
<input class="form-control mb-2" name="midterm_score" placeholder="Midterm Score">
<input class="form-control mb-2" name="final_score" placeholder="Final Score">
<input class="form-control mb-2" name="attendance" placeholder="Attendance">
<input class="form-control mb-2" name="assignment_score" placeholder="Assignment Score">

<button class="btn btn-success">Save</button>

</form>
</body>
</html>
