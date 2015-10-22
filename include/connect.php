<?php
$servername = "localhost";
$dbname = "collegespace";
$dbusername = "root";
$password = "Linkinpark2014";


	$conn = new mysqli($servername, $dbusername, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
        }
        else
        {
        	//echo "Connected!";
        }
?>