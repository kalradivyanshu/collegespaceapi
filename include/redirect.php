<?php
	function redirect($loc,$error=0)
	{
		if($error == 0)
		{
			header("Location: http://awesomeness.cf/collegespace".$loc);
		}
		else
		{
			header("Location: http://awesomeness.cf/collegespace".$loc."?error=".$error);
		}
		die();
	}
?>