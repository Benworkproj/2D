<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="alumnistyle.css">

</head>
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


	<div class="row" style="display: flex; justify-content: center;">
			<div class="col-lg-2">

			</div>
			<div class="col-lg-8" style="background-color: #CCCCCC; width: 90%; border-radius: 15px; max-width: 700px;">

				<?php

					$profileid = $_SESSION['userid'];
					$result = mysqli_query($conn, "SELECT * FROM users WHERE ID ='$profileid' ");
					$rows = mysqli_fetch_assoc($result);

				?>
				<br>Name <?php $yn = $rows['Name']?> <?php echo "$yn"?><br>
				Course <?php $yc = $rows['Course']?> <?php echo "$yc"?><br>
				Year <?php $yy = $rows['Year']?> <?php echo "$yy"?><br>
				Password <?php $yp = $rows['Password']?> <?php echo "$yp"?><br>
				<input type="submit" name="edit" value="UPDATE" onclick="openForm()"  style="width: 35%; margin-top: 15px;">

				<br><BR>
				<div style="display: none;" id="formm">
					<form action="userprofile.php" method="POST">

					<div class="row">
						<div class="col-sm-4">
						Name <input type="text" name="newname" value="<?php echo $rows['Name']; ?>" style="padding-left: 15px;">
						</div>
						<div class="col-sm-4">
						Course <input type="text" name="newcourse" value="<?php echo $rows['Course']; ?>" style="padding-left: 15px;">
						</div>
						<div class="col-sm-4">
						Year <input type="text" name="newyear" value="<?php echo $rows['Year']; ?>" style="padding-left: 15px;">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
						Password <input type="Password" name="newpass" value="<?php echo $rows['Password']; ?>" style="padding-left: 15px;">
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12" style="height: 5px;">
						</div>

					</div>


					<div class="row">
						<div class="col-sm-12" style="display: flex;justify-content: space-around;">

						<input type="submit" name="update1" value="UPDATE" style="width: 150px; margin-top: 5px; color: white; background-color: #449F73; margin-bottom: 10px;">
						<input type="submit" name="closeform" value="CLOSE" onclick="closeForm()" style="width: 150px; margin-top: 5px; margin-bottom: 10px;">
						</div>
					</div>
					

					<?php 
						if(isset($_POST['update1'])){
						$id=$_SESSION['userid'];
						$nname=$_POST['newname'];
						$ncourse=$_POST['newcourse'];
						$nyear=$_POST['newyear'];
						$npass=$_POST['newpass'];
						mysqli_query($conn, "UPDATE users SET Name='$nname', Course='$ncourse', Year='$nyear', Password='$npass' WHERE ID='$id'");
						echo"<script>alert('Updated successfully! Please refresh.')</script>";
						}
					?>
					</form>
				</div>
				<script>
					function openForm(){
						document.getElementById("formm").style.display="";
					}
					function closeForm(){
						document.getElementById("formm").style.display="none";
					}
				</script>
			</div>
			<div class="col-lg-2">

			</div>
</body>
</html>