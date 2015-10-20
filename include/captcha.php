<?php
	function confirmcaptcha($captchakey)
	{
		$postfields = array('secret'=>'6Leu_ggTAAAAAHNIFfuyGHORkSNs3m2AD4BWUixq', 'response'=>$_POST["g-recaptcha-response"]);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
		$result = json_decode(curl_exec($ch));
		if($result->success == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>