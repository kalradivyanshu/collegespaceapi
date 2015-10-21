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
				<link href="css/main.css" rel="stylesheet">
			</head>
			<body>
				<form>
					<input type="text" name="title" placeholder="Title"><br/><br/>
					<select name="type" id="typeselect"><br/><br/>
						<option value="select">Select</option>
						<option value="notice">Notice</option>
						<option value="result">Result</option>
						<option value="blog">Blog</option>
					</select>
					<div id="notice" class="typeform">
						<textarea name="about" placeholder="Explain in brief what the notice is about" ></textarea><br/><br/>
						<input type="text" name="for" placeholder="What branch and year is it for?" size="30"><br/><br/>
						<input type="text" name="image" placeholder="Notice Image link"><br/><br/>
						<input  type="text" name="link" placeholder="Web Link">
					</div>
					<div id="result" class="typeform">
						<input type="text" name="for" placeholder="What sem is it for?" size="30"><br/><br/>
						<input type="text" name="link" placeholder="Result pdf link"><br/><br/>
						<input  type="text" name="link" placeholder="Web Link">
					</div>
					<div id="blog" class="typeform">
						<textarea type="text" name="about" placeholder="Explain in brief what the blog is about" ></textarea><br/><br/>
						<textarea type="text" name="content" placeholder="Content"></textarea><br/><br/>
						<textarea type="text" name="html" placeholder="HTML Code"></textarea><br/><br/>
						<input  type="text" name="link" placeholder="Web Link">
					</div>
					<input type="submit" id="submit" value="Add" class="typeform">
				</form>
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