<!DOCTYPE html>
<html>
<head>
	<title>Alumni Directory</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="alumnistyle.css">
</head>
<body>
<div class="row">
		<div class="col-sm-4" style="background-color: #449F73;">
			<a href="homepage.php"><img src="logo.png" style="width: 70%; padding-left: 10%; padding: 10px 10px 10px 10px; max-height: 78px;"></a>
		</div>
		<div class="col-sm-4" style="background-color: #449F73;">

		</div>
		<div class="col-sm-4" style="background-color: #449F73;" id="alumniname">
			<?php
			session_start();
			echo "<a href='userprofile.php' style='color: black; text-decoration: none'><p style='margin-top: 9px;'>".$_SESSION['username'] ."  ".$_SESSION['userid']."</p></a>";

			include("conn.php");
			?>
		</div>
</div>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<a href="homepage.php">Home</a>
	<a href="userprofile.php">Profile</a>
	<a href="directory.php">Directory</a>
	<a href="feedback.php">Feedback</a>
	<a href="login.php">Logout</a>


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
		<div class="col-sm-2">
		
		</div>

		<div class="col-sm-8">
		
			<form method="POST" id="directory">
				<div class="row">
					<div class="col-sm-12">
						name: <input type="text" name="namesearch" style="width: 200px;">
					</div>
				</div>
				<div class="row">	
					<div class="col-lg-6">
						course: <select name="coursesearch">
						<option value=""></option>
						<option value="BSIT">BSIT</option>
						<option value="BSED">BSED</option>
						<option value="BSHM">BSHM</option>
						<option value="BSBM">BSBM</option>
						<option value="BSCS">BSCS</option>
						<option value="BSBM">BSBM</option>
						<option value="BSPSYCH">BSPSYCH</option>
						</select>
					</div>
					<div class="col-lg-6">
						year: <input type="text" name="yearsearch" size="4" style="width: 100px;">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type="submit" value="search" name="search">
					</div>
				</div>	
			</form>
			<div class="row">
				<div class="col-sm-1">
					</div>
				<div class="col-sm-10">
				

			<?php

			$sql = "SELECT * FROM users";

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
				</tr>";

			if($_SERVER['REQUEST_METHOD']=='POST'){
				if(isset($_POST['search'])){
					$sname = $_POST['namesearch'];
					$scourse = $_POST['coursesearch'];
					$syear = $_POST['yearsearch'];
					$result = mysqli_query($conn, "SELECT * FROM users WHERE Name ='$sname' OR Year='$syear' OR Course='$scourse'");
				while($rows = mysqli_fetch_assoc($result)){
						echo"
						<tr>
						<td>".$rows['Name']."</td>
						<td>".$rows['Course']."</td>
						<td>".$rows['Year']."</td>
						";
				}
				}
			}

			?>
		</div>
				</div>
			<div class="col-sm-1">
			</div>
		</div>

		<div class="col-sm-2">
		
		</div>

</div>
</body>
</html>