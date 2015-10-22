<?php
	include 'include/check.php';
	include 'include/redirect.php';
	if($user_logged_in == 1)
	{
		redirect("/home.php",0);
	}
	else
	{
		redirect("/login.php",0);
	}
?>