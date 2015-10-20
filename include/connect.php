<?php
$servername = "servername";
$dbname = "databasename";
$dbusername = "username";
$password = "password";


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