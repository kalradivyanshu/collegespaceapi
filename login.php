<?php
	//var_dump($_POST);
	include "include/error.php";
	include "include/trylogin.php";
	include_once "include/captcha.php";
	include "include/redirect.php";
	//echo $_POST["username"].$_POST["password"];
	if(isset($_POST["username"]))
	{
		if(isset($_POST["password"]))
		{
			if(isset($_POST["g-recaptcha-response"]))
			{
				if(confirmcaptcha($_POST["g-recaptcha-response"]))
				{
					if(login($_POST["username"],$_POST["password"]))
					{
						redirect("/home.php");
					}
					else
					{
						redirect("/login.php",2);
					}
				}
				else
				{
					redirect("/login.php",3);
				}
			}
			else
			{
				redirect("/login.php",3);
			}
		}
		else
		{
			redirect("/login.php",1);
		}
	}
?>
<html>
	<head>
		<title>
			Admin Login | CollegeSpace
		</title>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<link href="css/main.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style="font-family: 'Open Sans', sans-serif; overflow-x:hidden;">
		<div class="headingdiv"><h1>Login | Admin Panel</h1></div>
		<div class="row maindiv">
			<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="login.php" role="form">
					<?php
					if($error == 1)
					{
						?>
						<div class="alert alert-danger centerinput" role="alert">
							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							<span class="sr-only">Error:</span>
								All fields are required.
						</div>
						<?php
					}
					else if($error == 2)
					{
						?>
						<div class="alert alert-danger centerinput" role="alert">
							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							<span class="sr-only">Error:</span>
								Wrong Username and Password combination.
						</div>
						<?php
					}
					else if($error == 3)
					{
						?>
						<div class="alert alert-danger centerinput" role="alert">
							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							<span class="sr-only">Error:</span>
								You either failed the captcha test, or forgot to do it.
						</div>
						<?php
					}
					?>
					<input type="text" name="username" placeholder="Username" class="form-control centerinput"><br>
					<input type="password" name="password" placeholder="Password" class="form-control centerinput"><br><br>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="g-recaptcha" data-sitekey="6Leu_ggTAAAAAHrHiaKqG197bzabAGuPpOnleIec"></div>
						</div>
					</div>
					<div class="btndiv">
						<input type="submit" value="Login" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>