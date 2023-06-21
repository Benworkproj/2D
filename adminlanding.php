<!DOCTYPE html>
<html>
<head>
	<title>Admin Landing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="alumnistyle.css">

</head>
<body>
<div class="row">
		<div class="col-sm-4" style="background-color: #449F73;">
			<a href="adminlanding.php"><img src="logo.png" style="width: 70%; padding-left: 10%; padding: 10px 10px 10px 10px; max-height: 78px;"></a>
		</div>
		<div class="col-sm-4" style="background-color: #449F73;">

		</div>
		<div class="col-sm-4" style="background-color: #449F73;" id="alumniname">
			<?php
			session_start();
			echo "<a href='#' style='color: black; text-decoration: none'><p style='margin-top: 9px;'>".$_SESSION['adUser'] ."  ".$_SESSION['adID']."</p></a>";

			include("conn.php");
			?>
		</div>
</div>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<a href="adminlanding.php">Home</a>
	<a href="addirectory.php">Directory</a>
	<a href="adfeedback.php">Feedbacks</a>
	<a href="adlogin.php">Logout</a>


</div>
<span onclick="openNav()" style="margin-left: 10px; font-size: 30px;">&equiv;</span>

<script>
	function openNav(){
		document.getElementById("mySidenav").style.width="250px";
	}
	function closeNav(){
		document.getElementById("mySidenav").style.width="0";
	}
</script>
</div>


<div class="row">
		<div class="col-sm-12">
			
			

		</div>

</div>
</body>
</html>