<!DOCTYPE html>
<html>
<head>
	<title>Admin Feedback</title>
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
		<div class="col-lg-2">
			
		</div>

		<div class="col-lg-8">
			
			<form method="POST" action="">
				<?php

				$sql = "SELECT * FROM feedback";

				echo"
			<br><br>
			<div style='background-color:#e6e6e6; padding: 10px 10px 10px 10px; border-radius:15px; max-width:650px; margin:auto;'>
			<table border='0'>
			<style>
				tbody tr:nth-child(odd) {
  				background-color: #e6e6e6;
  				color: black;
				}
				tbody tr:nth-child(even) {
  				background-color: #cccccc;
  				color: black;
  				}
  				table{
  					width:100%;
  					max-width: 600px;
  					margin: auto;
  				}
  				tbody td{
  					padding-left: 10px;
  				}
			</style>
			<tbody>
				<tr>
					<th>Name</th>
					<th>Course</th>
					<th>Year</th>
					<th>Feedback</th>
					<th>Date</th>
				</tr>";

			/*if($_SERVER['REQUEST_METHOD']=='POST'){
				if(isset($_POST['search'])){
					$sname = $_POST['namesearch'];
					$scourse = $_POST['coursesearch'];
					$syear = $_POST['yearsearch'];
					$result = mysqli_query($conn, "SELECT * FROM feedback WHERE Name ='$sname' OR Year='$syear' OR Course='$scourse'");*/
				$result = mysqli_query($conn, "SELECT * FROM feedback");
				while($rows = mysqli_fetch_assoc($result)){
						echo"
						<tr>
						<td>".$rows['Name']."</td>
						<td>".$rows['Course']."</td>
						<td>".$rows['Year']."</td>
						<td>".$rows['Feedback']."</td>
						<td>".$rows['Date']."</td>
			<td><a href='addelete.php?id='>Delete</a>";
				}
				
			

			
				?>
			</form>

		</div>


</div>
</body>
</html>