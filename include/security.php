<?php
	function stripchar($string, $mod=0)
	{
		if($mod==0)
			return preg_replace('/[^A-Za-z0-9@.\- ]/', '', $string);
		else if($mod==1)
			return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		else if($mod==2)
			return preg_replace('/[^A-Za-z0-9.\/\\\-]/', '', $string);
	}
?>