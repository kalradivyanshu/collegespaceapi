<?php
	include 'include/check.php';
	include "include/redirect.php";
?>
<html>
<head>
	<title>
		Logged In as <?php echo $user_username; ?>
	</title>
</head>
<body>
	<?php
	if($user_logged_in == 1)
	{
		?>
		<b>Index:</b></br>
		<a href = "addpost.php">Add Post</a><br>
		<a href = "editpost.php">Edit Post</a>
		<?php
	}
	else
	{
		redirect("/login.php",0);
	}
	?>
</body>
</html>