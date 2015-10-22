<?php
	include 'include/check.php';
	include "include/redirect.php";
	if($user_logged_in == 1)
	{	
		if(!empty($_POST["title"]))
		{
			echo $_POST["type"];
			if(!empty($_POST["type"]))
			{
				$type=$_POST["type"];
				if($type == "notice")
				{
					if(!empty($_POST["aboutn"]) && !empty($_POST["forn"]) && !empty($_POST["image"]) && !empty($_POST["linkn"]))
					{
						$sql = "INSERT into `notice` VALUES ('".uniqid()."','".$_POST["title"]."','".$_POST["aboutn"]."','".$_POST["forn"]."','".$_POST["image"]."','".$_POST["linkn"]."','".$user_username."', '".time()."')";
					}
					else
					{
						redirect("/addpost.php",1);
					}
				}
				else if($type == "result")
				{
					if(!empty($_POST["forr"]) && !empty($_POST["pdflink"]) && !empty($_POST["linkr"]))
					{
						$sql = "INSERT into `result` VALUES ('".uniqid()."','".$_POST["title"]."','".$_POST["forr"]."','".$_POST["pdflink"]."','".$_POST["linkr"]."','".$user_username."', '".time()."')";
					}
					else
					{
						redirect("/addpost.php",1);
					}
				}
				else if($type == "blog")
				{
					if(!empty($_POST["aboutb"]) && !empty($_POST["content"]) && !empty($_POST["html"]) && !empty($_POST["linkb"]))
					{
						$sql = "INSERT into `blog` VALUES ('".uniqid()."','".$_POST["title"]."','".$_POST["aboutb"]."','".$_POST["content"]."','".$_POST["html"]."','".$_POST["linkb"]."','".$user_username."', '".time()."')";
					}
					else
					{
						redirect("/addpost.php",1);
					}
				}
				if(!empty($sql))
				{
					$result = $conn->query($sql);
					redirect("/addpost.php","success");
				}
			}
			else
			{
				redirect("/addpost.php",1);
			}
		}
		else
		{
			redirect("/addpost.php",1);
		}
	}
	else
	{
		redirect("/login.php");
	}
?>