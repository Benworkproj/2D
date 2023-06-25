<<<<<<< HEAD
<!-- PHP CODE BLOCK -->
    <?php
		include "database.php";

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$username=$_POST["username"];
			$password=$_POST["password"];

			$sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."' ";

			$result=mysqli_query($data,$sql);

			$row=mysqli_fetch_array($result);

			
			if($row["usertype"]=="admin"){
				$_SESSION["username"]=$username;
				header("location:adminhome.php");
			}elseif($row["usertype"]=="editor"){
				$_SESSION["username"]=$username;
				header("location:editorhome.php");
			}elseif($row["usertype"]=="staff"){	
				$_SESSION["username"]=$username;
				header("location:staffhome.php");
			}else{
				$message = "Invalid credentials.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		
	?>
<!-- END OF PHP CODE BLOCK -->	
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<!-- LINK RESOURCES CODE BLOCK-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  		<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">

<!-- CSS CODE BLOCK -->
	<style type="text/css">
			body{   
    			background-image: url("background.jpg");
    			background-size: 91%;
			}  
			#frm{  
    			border: solid darkgreen 5px;  
    			width: 37%; 
    			height: 500px; 
    			border-radius: 2px;  
    			margin: 35px auto;  
    			background: white;  
    			padding: 45px;  
    			background-color: ghostwhite;
    			margin-right: 30px;
    			margin-top: 60px;
			}  
			#btn{  
    			color: black;  
    			background: green;  
    			padding: 7px;  
    			margin-left: 75%;   
			}  
			h1, h3{
				font-family: 'Abril Fatface', cursive;
				text-align: center;
				color: black;
			}
			label, input{
				text-align: center;
				font-family: 'Gruppo', cursive;
				font-weight: bold;
				font-size: 20px;
				color: #729d39;
				margin-left: 5%; 
			}
		</style>
<!-- END OF PHP CODE BLOCK -->
	<body>
		<center>
			<div id = "frm">  
        		<h1>STUDENT PUBLICATION SYSTEM</h1> 
        			<br> 
        		<h3>- - - Login Form - - - </h3>
        			<br>
        		<form name="f1" action = "" onsubmit = "return validation()" method = "POST"> 
            		<p>  
                		<label> Username: </label>  
                		<input type = "text" id ="user" name  = "username" required />  
            		</p>  
            		<p>  
                		<label> Password: </label>  
                		<input type = "password" id ="pass" name  = "password" required />  
            		</p>  
            		<p>     
                		<input type = "submit" id = "btn" value = "Login" name = "Login"/>  
            		</p>  
        		</form>  
    		</div> 
		</center>
	</body>
=======
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

>>>>>>> c322588619372e602a0bc441e5142a8157e66768
</html>