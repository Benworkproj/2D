<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
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
		<div class="col-lg-3"></div>

		<div class="col-lg-6">
			<h3 style="text-align: center;">FEEDBACK</h3>
			<form method="POST" id="feedbackform">
			<div class="namecourse">
				
					Name:<input type="text"  name="feedname"style="margin-bottom: 15px; padding-left: 12px;" >
					
					&nbsp;&nbsp;Course:<input type="text"  name="feedcourse"style="margin-bottom: 15px;  padding-left: 12px;">

					&nbsp;&nbsp;Year:<input type="text" name="feedyear"style="margin-bottom: 15px;  padding-left: 12px;">
			</div>

			Text: <br>
			<textarea name="feedback" required="true" style="width: 100%; border-radius: 15px; margin-bottom: 15px; padding: 10px 10px 10px 10px;" rows="10"></textarea>
			<input type="submit" value="SUBMIT" name="submitfb" style="background-color: #449F73; color: white; width: 100px;">
			</form>

			<?php
				if(isset($_POST['submitfb'])){
					$feedback = $_POST['feedback'];
					$name = $_POST['feedname'];
					$course = $_POST['feedcourse'];
					$year = $_POST['feedyear'];
				if($feedback){
				$feedquery = mysqli_query($conn, "INSERT INTO feedback (Feedback, Name, Course, Year, Status) VALUES('$feedback', '$name', '$course', '$year', 'Unread')");
				echo"<script>alert('Thank you for your feedback!')</script>";
				}
				}
			?>
		</div>

		<div class="col-lg-3">
		
		</div>

</div>

</body>
</html>