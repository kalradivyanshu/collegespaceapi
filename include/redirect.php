<?php
	function redirect($loc,$error="0",$extra="0")
	{
		$quesmark = (($extra == "2")? "" : "?");
		if($error == "0")
		{
			header("Location: http://localhost/collegespace".$loc);
		}
		else
		{
			header("Location: http://localhost/collegespace".$loc.$quesmark."error=".$error);
		}
		die();
	}
?>