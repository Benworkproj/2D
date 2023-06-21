<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="alumnistyle.css">

</head>
<body>
	<div class="row">
		<div class="col-sm-4" style="background-color: #449F73;">
			<img src="logo.png" style="width: 70%; padding-left: 10%; padding: 10px 10px 10px 10px; max-height: 78px;">
		</div>
		<div class="col-sm-8" style="background-color: #449F73;"></div>
	</div>

	<div class="row">
		<div class="col-sm-12" style="height: 60px; background-color: white;" ></div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div id="log" style="margin-top: 10%;">
			<form method="POST">
				student id: <input type="text" name="studentid" class="textbox"><br><br>
				password: <input type="password" name="pass" class="textbox"><br><br>
				<input type="submit" value="login" name="submit" id="loginbutt" style="">
			</form>
			<?php 
				include("conn.php");

				session_start();
				if($_SERVER['REQUEST_METHOD']=='POST'){
					if(isset($_POST['submit'])){
						$sID = $_POST['studentid'];
						$pass = $_POST['pass'];
						$res = mysqli_query($conn, "SELECT * FROM users WHERE StudentID='$sID' AND Password='$pass'");
						while($row = mysqli_fetch_assoc($res)){
							if($sID==$row['StudentID'] && $pass==$row['Password']){
									$_SESSION['username']= $row['Name'];
									$_SESSION['userid']= $row['ID'];
									Header('Location: homepage.php');
							}
						}
					}
				}
			?>
			</div>
		</div>
	</div>
	<br><BR><BR>
	<a href="adlogin.php">Admin Login</a>
</body>

</html>