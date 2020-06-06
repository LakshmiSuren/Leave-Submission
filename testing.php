<?php

$user="root";
$password="";
$db="leaveform";
$conn=new mysqli("localhost" ,$user, $password, $db) or die("You are not connected");
	echo "You are connected";

?>