<?php
$servername = "mysql9.000webhost.com";
$dbname = "a4351752_div";
$dbusername = "a4351752_admin";
$password = "Linkinpark2014";


        $conn = new mysqli($servername, $dbusername, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
        }
        else
        {
                //echo "Success!";
        }
?>