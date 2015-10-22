<?php
	include 'include/check.php';
	include "include/redirect.php";
	include "include/error.php";
	include "include/postinfo.php";
	if($user_logged_in == 1)
	{
		$id = (!empty($_GET["id"]) ? $_GET["id"] : redirect("/addpost.php",0));
		$type = gettypefromid($id);
		if($type=="none")
			redirect("/addpost.php",0);
		$info = getinfo($id);
		?>
		<html>
			<head>
				<title>
					Edit <?php echo ucfirst($type); ?>
				</title>
				<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
				<link href="css/main.css" rel="stylesheet">
			</head>
			<body style="font-family: 'Open Sans', sans-serif; overflow-x:hidden;">
				<div class="headingdiv"><h1>Edit <?php echo ucfirst($type); ?></h1></div>
				<div class="row maindiv">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<form role="form" method="POST" action="addpostphp.php">
								<?php
								if($error == "1")
								{
									?>
									<div class="alert alert-danger centerinput" role="alert">
										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										<span class="sr-only">Error:</span>
											All fields are required.
									</div>
									<?php
								}
								else if($error == "success" && !empty($error))
								{
									?>
									<div class="alert alert-success centerinput" role="alert">
											<strong>Success!</strong> Post added!
									</div>
									<?php
								}
								else
								{}
								?>
								<input type="text" name="title" placeholder="Title" class="form-control centerinput" value="<?php echo $info["title"]; ?>"><br/><br/>
								<input type="hidden" name="type" value="<?php echo $type;?>">
								<?php
								if($type == "notice")
								{
									?>
									<div>
										<textarea name="aboutn" placeholder="Explain in brief what the notice is about" class="form-control" rows="10"><?php echo $info["about"]; ?></textarea><br/><br/>
										<input type="text" name="forn" placeholder="What branch and year is it for?" class="form-control" value="<?php echo $info["for"]; ?>"><br/><br/>
										<input type="text" name="image" placeholder="Notice Image link" class="form-control" value="<?php echo $info["image"]; ?>"><br/><br/>
										<input  type="text" name="linkn" placeholder="Web Link" class="form-control" value="<?php echo $info["weblink"]; ?>">
									</div>
									<?php
								}
								else if($type == "result")
								{
									?>
									<div>
										<input type="text" name="forr" placeholder="What sem is it for?" class="form-control" value="<?php echo $info["for"]; ?>"><br/><br/>
										<input type="text" name="pdflink" placeholder="Result pdf link" class="form-control" value="<?php echo $info["pdflink"]; ?>"><br/><br/>
										<input  type="text" name="linkr" placeholder="Web Link" class="form-control" value="<?php echo $info["weblink"]; ?>">
									</div>
									<?php
								}
								else if($type == "blog")
								{
									?>
									<div>
										<textarea type="text" name="aboutb" placeholder="Explain in brief what the blog is about" class="form-control" rows="10"><?php echo $info["about"]; ?></textarea><br/><br/>
										<textarea type="text" name="content" placeholder="Content" class="form-control"><?php echo $info["content"]; ?></textarea><br/><br/>
										<textarea type="text" name="html" placeholder="HTML Code" class="form-control"><?php echo $info["html"]; ?></textarea><br/><br/>
										<input  type="text" name="linkb" placeholder="Web Link" class="form-control" value="<?php echo $info["weblink"]; ?>">
									</div>
									<?php
								}
								?>
								<div class="btndiv">
									<input type="submit" value="Save" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
				<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
				<script src="js/typeselect.js"></script>
			</body>
		</html>
		<?php
	}
	else
	{
		redirect("/login.php",0);
	}
?>