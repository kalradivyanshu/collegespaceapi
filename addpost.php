<?php
	include 'include/check.php';
	include "include/redirect.php";
	if($user_logged_in == 1)
	{
		?>
		<html>
			<head>
				<title>
					Add Post
				</title>
				<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
				<link href="css/main.css" rel="stylesheet">
			</head>
			<body style="font-family: 'Open Sans', sans-serif; overflow-x:hidden;">
				<div class="headingdiv"><h1>Add Post</h1></div>
				<div class="row maindiv">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<form role="form">
								<input type="text" name="title" placeholder="Title" class="form-control centerinput"><br/><br/>
								<select name="type" id="typeselect" class="form-control"><br/><br/>
									<option value="select">Select</option>
									<option value="notice">Notice</option>
									<option value="result">Result</option>
									<option value="blog">Blog</option>
								</select>
								<div id="notice" class="typeform">
									<textarea name="about" placeholder="Explain in brief what the notice is about" class="form-control firstelement" rows="10"></textarea><br/><br/>
									<input type="text" name="for" placeholder="What branch and year is it for?" class="form-control"><br/><br/>
									<input type="text" name="image" placeholder="Notice Image link" class="form-control"><br/><br/>
									<input  type="text" name="link" placeholder="Web Link" class="form-control">
								</div>
								<div id="result" class="typeform">
									<input type="text" name="for" placeholder="What sem is it for?" class="form-control firstelement"><br/><br/>
									<input type="text" name="link" placeholder="Result pdf link" class="form-control"><br/><br/>
									<input  type="text" name="link" placeholder="Web Link" class="form-control">
								</div>
								<div id="blog" class="typeform">
									<textarea type="text" name="about" placeholder="Explain in brief what the blog is about" class="form-control firstelement" rows="10"></textarea><br/><br/>
									<textarea type="text" name="content" placeholder="Content" class="form-control"></textarea><br/><br/>
									<textarea type="text" name="html" placeholder="HTML Code" class="form-control"></textarea><br/><br/>
									<input  type="text" name="link" placeholder="Web Link" class="form-control">
								</div>
								<div class="btndiv">
									<input type="submit" id="submit" value="Add" class="typeform btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
				<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
				<script src="js/typeselect.js"></script>
			</body>
		</html>
		<?php
	}
	else
	{
		redirect("/login.php",0);
	}
?>