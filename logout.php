<?php
	include 'include/redirect.php';
	$cookie_name = '91706c1d7634c6537fbe65cc50941843';
	unset($_COOKIE[$cookie_name]);
	$res = setcookie($cookie_name, '', time() - 3600, "/");
	redirect("/login.php",0);
	die();
?>	