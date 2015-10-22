<?php
	function gettypefromid($id_str)
	{
		include "connect.php";
		$sql = "SELECT id FROM notice WHERE id = '$id_str';";
		$result = $conn->query($sql);
		$rown = $result->fetch_assoc();
		$sql = "SELECT id FROM blog WHERE id = '$id_str';";
		$result = $conn->query($sql);
		$rowb = $result->fetch_assoc();
		$sql = "SELECT id FROM result WHERE id = '$id_str';";
		$result = $conn->query($sql);
		$rowr = $result->fetch_assoc();
		if($rowr["id"] == $id_str)
		{
			$type="result";
		}
		else if($rown["id"] == $id_str)
		{
			$type="notice";
		}
		else if($rowb["id"] == $id_str)
		{
			$type="blog";
		}
		else
		{
			$type="none";
		}
		return $type;
	}
	function getinfo($id_str)
	{
		include "connect.php";
		$type=gettypefromid($id_str);
		if($type == "none")
			return array();
		$sql="SELECT * FROM $type WHERE id='$id_str'";
		$result = $conn->query($sql);
		return $result->fetch_assoc();
	}
?>