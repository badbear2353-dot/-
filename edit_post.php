<?php
include 'config.php';
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM posts WHERE id=$id");
$row=mysqli_fetch_assoc($result);
?>
<form action="update_post.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input name="username" value="<?php echo $row['username']; ?>">
<textarea name="caption"><?php echo $row['caption']; ?></textarea>
<button>Update</button>
</form>