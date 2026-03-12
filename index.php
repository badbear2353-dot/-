<?php include 'config.php'; 
$result=mysqli_query($conn,"SELECT * FROM posts ORDER BY id DESC"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Instagram CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
<div class="row">
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<div class="col-md-4">
<div class="card mb-4">
<img src="uploads/<?php echo $row['image']; ?>" class="card-img-top">
<div class="card-body">
<h5><?php echo $row['username']; ?></h5>
<p><?php echo $row['caption']; ?></p>
<p>📍 <?php echo $row['location']; ?></p>
<p>❤️ <?php echo $row['likes']; ?></p>
<a href="edit_post.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
<a href="delete_post.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</body>
</html>