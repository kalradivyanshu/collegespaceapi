<?php
include "include/connect.php";
if(isset($_GET["key"]))
  $key = $_GET["key"];
else
{
  header('Content-Type: application/json');
  echo json_encode(array("error"=>"No key found."));
  die();
}
if($key=="f994d140ead66d45a20d8c611742df39")
{
  if(isset($_GET["time"]))
  {
    $time = $_GET["time"];
  }
  else
  {
    $time = 0;
  }
  $sql = "SELECT * FROM `notice` WHERE time>'$time' ORDER BY time ASC";
  $notices = $conn->query($sql);
  $sql = "SELECT * FROM `blog` WHERE time>'$time' ORDER BY time ASC";
  $blogs = $conn->query($sql);
  $sql = "SELECT * FROM `result` WHERE time>'$time' ORDER BY time ASC";
  $results = $conn->query($sql);
  $jsonnotice = array();
  $jsonblog = array();
  $jsonresults = array();
  $i=0;
  while($row = $notices->fetch_assoc())
  {
    $jsonnotice[$i] = array("type"=>"notice","id"=>$row["id"],"title"=>$row["title"],"about"=>$row["about"],"for"=>$row["for"],"image"=>$row["image"],"weblink"=>$row["weblink"],"user"=>$row["user"],"timestamp"=>$row["time"]);
    $i++;
  }
  $i=0;
  while($row = $blogs->fetch_assoc())
  {
    $jsonblog[$i] = array("type"=>"blog","id"=>$row["id"],"title"=>$row["title"],"about"=>$row["about"],"content"=>$row["content"],"html"=>htmlentities($row["html"]),"weblink"=>$row["weblink"],"user"=>$row["user"],"timestamp"=>$row["time"]);
    $i++;
  }
  $i=0;
  while($row = $results->fetch_assoc())
  {
    $jsonresults[$i] = array("type"=>"result","id"=>$row["id"],"title"=>$row["title"],"for"=>$row["for"],"pdflink"=>$row["pdflink"],"weblink"=>$row["weblink"],"user"=>$row["user"],"timestamp"=>$row["time"]);
    $i++;
  }
  $jsonoutput = array($jsonnotice,$jsonblog,$jsonresults);
  header('Content-Type: application/json');
  echo json_encode($jsonoutput);
}
else
{
  header('Content-Type: application/json');
  echo json_encode(array("error"=>"Wrong Key."));
}
?>