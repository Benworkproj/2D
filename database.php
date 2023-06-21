<?php

	$host="localhost";
	$user="root";
	$password="";
	$db="user";

	session_start();
	$data=mysqli_connect($host,$user,$password,$db);

	if($data===false){
		die("Connection Error.");
	}

?>