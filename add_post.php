<!DOCTYPE html>
<html>
<head>
<title>Add Post</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
<h2>Add Post</h2>
<form action="insert_post.php" method="POST" enctype="multipart/form-data">
<input class="form-control mb-2" name="username" placeholder="Username">
<input class="form-control mb-2" name="location" placeholder="Location">
<textarea class="form-control mb-2" name="caption" placeholder="Caption"></textarea>
<input type="file" class="form-control mb-2" name="image">
<input class="form-control mb-2" name="hashtags" placeholder="#tags">
<button class="btn btn-success">Post</button>
</form>
</div>
</body>
</html>