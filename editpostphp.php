<?php
	include 'include/check.php';
	include "include/redirect.php";
	if($user_logged_in == 1)
	{	
		//var_dump($_POST);
		if(!empty($_POST["title"]))
		{
			////echo $_POST["type"];
			if(!empty($_POST["type"]))
			{
				$type=$_POST["type"];
				if($type == "notice")
				{
					if(!empty($_POST["aboutn"]) && !empty($_POST["forn"]) && !empty($_POST["image"]) && !empty($_POST["linkn"]))
					{
						$sql1 = "UPDATE `notice` SET title='".$_POST["title"]."',`for`='".$_POST["forn"]."',about='".$_POST["aboutn"]."',image='".$_POST["image"]."', weblink='".$_POST["linkn"]."' WHERE id='".$_POST["id"]."'";
					}
					else
					{
						redirect("/editpost.php?id=".$_POST["id"]."&",1,2);
					}
				}
				else if($type == "result")
				{
					if(!empty($_POST["forr"]) && !empty($_POST["pdflink"]) && !empty($_POST["linkr"]))
					{
						$sql1 = "UPDATE `result` SET title='".$_POST["title"]."',`for`='".$_POST["forr"]."',pdflink='".$_POST["pdflink"]."', weblink='".$_POST["linkr"]."' WHERE id='".$_POST["id"]."'";
					}
					else
					{
						//echo "inner error";
						redirect("/editpost.php?id=".$_POST["id"]."&",1,2);
					}
				}
				else if($type == "blog")
				{
					if(!empty($_POST["aboutb"]) && !empty($_POST["content"]) && !empty($_POST["html"]) && !empty($_POST["linkb"]))
					{
						$sql1 = "UPDATE `blog` SET title='".$_POST["title"]."',html='".$_POST["html"]."',about='".$_POST["aboutb"]."',content='".$_POST["content"]."', weblink='".$_POST["linkb"]."' WHERE id='".$_POST["id"]."'";
					}
					else
					{
						redirect("/editpost.php?id=".$_POST["id"]."&",1,2);
					}
				}
				if(!empty($sql1))
				{
					//echo $sql1;
					$result = $conn->query($sql1);
					redirect("/editpost.php?id=".$_POST["id"]."&","success",2);
				}
			}
			else
			{
				//echo "outer error";
				redirect("/editpost.php?id=".$_POST["id"]."&",1,2);
			}
		}
		else
		{
			//echo "even outer error";
			redirect("/editpost.php?id=".$_POST["id"]."&",1,2);
		}
	}
	else
	{
		//echo "even more outer error";
		redirect("/login.php");
	}
?>