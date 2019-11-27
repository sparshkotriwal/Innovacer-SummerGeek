<?php
$name = $_GET["name"];
$email= $_GET["email"];
$phone=$_GET["phone"];
$time=date("h:i:sa");
$msg=$name./n.$email./n.$phone./n.$time;
echo $time;
mail($email,"Visitor Details",$msg);
?>