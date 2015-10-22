<?php
	function redirect($loc,$error="0")
	{
		if($error == "0")
		{
			header("Location: http://localhost/collegespace".$loc);
		}
		else
		{
			header("Location: http://localhost/collegespace".$loc."?error=".$error);
		}
		die();
	}
?>