<?php
	include 'include/check.php';
	$sql1 = "SELECT title, user, id FROM `notice` ORDER BY `time`";
	$notices = $conn->query($sql1);
	$sql1 = "SELECT title, user, id FROM `blog` ORDER BY `time`";
	$blogs = $conn->query($sql1);
	$sql1 = "SELECT title, user, id FROM `result` ORDER BY `time`";
	$results = $conn->query($sql1);
?>
<html>
	<head>
		<title>
			Edit
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
			<div class="headingdiv"><h1>Edit</h1></div>
			<div class="row maindiv">
				<div class="col-md-6 col-md-offset-3">
					<select name="type" id="typeselect" class="form-control"><br/><br/>
						<option value="notice">Notices</option>
						<option value="result">Results</option>
						<option value="blog">Blog Posts</option>
					</select><br>
					<div id="result">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Type</th>
									<th>Added By</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while($rowr = $results->fetch_assoc())
								{
									?>
									<tr class="linktr nocenter" data-link="editpost.php?id=<?php echo $rowr["id"]; ?>">
										<td><?php echo $rowr["id"]; ?></td>
										<td><?php echo $rowr["title"]; ?></td>
										<td><?php echo "Result"; ?></td>
										<td><?php echo $rowr["user"]; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
					<div id="notice">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Type</th>
									<th>Added By</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while($rowr = $notices->fetch_assoc())
								{
									?>
									<tr class="linktr nocenter" data-link="editpost.php?id=<?php echo $rowr["id"]; ?>">
										<td><?php echo $rowr["id"]; ?></td>
										<td><?php echo $rowr["title"]; ?></td>
										<td><?php echo "Notice"; ?></td>
										<td><?php echo $rowr["user"]; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
					<div id="blog">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Type</th>
									<th>Added By</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while($rowr = $blogs->fetch_assoc())
								{
									?>
									<tr class="linktr nocenter" data-link="editpost.php?id=<?php echo $rowr["id"]; ?>">
										<td><?php echo $rowr["id"]; ?></td>
										<td><?php echo $rowr["title"]; ?></td>
										<td><?php echo "Blog"; ?></td>
										<td><?php echo $rowr["user"]; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<span id="submit"></span>
			<?php
		}
		else
		{
			redirect("/login.php",0);
		}
		?>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/link.js"></script>
		<script src="js/typeselect.js"></script>
	</body>
</html>
