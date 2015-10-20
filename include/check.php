<?php
	include 'connect.php';
	$cookie_name = "91706c1d7634c6537fbe65cc50941843";
	$verify = $_COOKIE[$cookie_name];
	$verify1 = explode(".", $verify);
	$sql = "SELECT * from user WHERE uniqid = '".$verify1[1]."' AND cookie = '".$verify1[0]."'";
	//echo $sql;
	$result = $conn->query($sql);
	if(!isset($_COOKIE[$cookie_name]))
	{
		$user_logged_in=0;
	}
	else if($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
		$user_logged_in=1;
		$user_id=$row["uniqid"];
		$user_username=$row["username"];
	}
	else
	{
		$user_logged_in=0;
	}
?>

	