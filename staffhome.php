<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";
	
	if(!isset($_SESSION["username"])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Staff's Home</title>
	</head>
	<body>
		<h1>THIS IS USER HOME PAGE</h1><?php echo $_SESSION["username"] ?>
		<a href="logout.php">Logout</a>
	</body>
</html>