<?php
	function login($username,$pass)
	{
		include 'connect.php';
		include 'security.php';
		$username = stripchar($username);
		
		//md5 to protect against mysql injections.
		$pass = md5($pass);

		$sql = "SELECT username, uniqid from user WHERE username = '".$username."' AND password='".$pass."'";
		//echo $sql;
		//echo "here!";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		//echo "<br>".$row["uniqid"]."<br>";
		if ($result->num_rows > 0) 
		{
			//echo "here";
			//$row = $result->fetch_assoc();
			$i = md5(uniqid().time());
			$cookie_name = "91706c1d7634c6537fbe65cc50941843";
			$cookie_value = $i.".".$row["uniqid"];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			$sql = "UPDATE user SET cookie = '".$i."' WHERE uniqid = '".$row["uniqid"]."'";
			//echo $sql;
			$result = $conn->query($sql);
			return true;
		}
		else 
		{
			return false;
		}
	}
?>		