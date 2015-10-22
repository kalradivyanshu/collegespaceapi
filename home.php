<?php
	include 'include/check.php';
	include "include/redirect.php";
?>
<html>
<head>
	<title>
		Dashboard | <?php echo $user_username; ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body style="font-family: 'Open Sans', sans-serif; overflow-x:hidden;">
	<?php
	if($user_logged_in == 1)
	{
		?>
		<div class="headingdiv"><h1>Dashboard</h1></div>
		<div class="row maindiv">
			<div class="col-md-6 col-md-offset-3">
				<table class="table table-hover">
					<tbody>
						<tr class="linktr" data-link="addpost.php">
							<td>Add Post</td>
						</tr>
						<tr  class="linktr" data-link="home.php">
							<td>Edit Post</td>
						</tr>
						<tr class="linktr" data-link="jsonapi.php?key=f994d140ead66d45a20d8c611742df39">
							<td>JSON API</td>
						</tr>
						<tr class="linktr" data-link="home.php">
							<td>Logout</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<?php
	}
	else
	{
		redirect("/login.php",0);
	}
	?>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/link.js"></script>
</body>
</html>