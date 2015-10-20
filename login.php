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
</head>
<form method="POST" action="login.php">
	<?php
	if($error == 1)
	{
		?>
		<span class="error">All Fields are required!</span><br>
		<?php
	}
	else if($error == 2)
	{
		?>
		<span class="error">Wrong Username/Password combination!</span><br>
		<?php
	}
	else if($error == 3)
	{
		?>
		<span class="error">You were either detected as not-human, or you forgot to prove you are not a robot, please try again!</span><br>
		<?php
	}
	?>
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br><br>
	<div class="g-recaptcha" data-sitekey="6Leu_ggTAAAAAHrHiaKqG197bzabAGuPpOnleIec"></div>
	<input type="submit" value="Login">
</form>