<!-- PHP CODE BLOCK -->
<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['submit'])){
			$name    = $_POST['name'];
			$gender   = $_POST['gender'];
			$email    = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$usertype = $_POST['user-type'];
			$profile  = $_POST['profile'];
			
			$query = "INSERT INTO login (name, gender, email, username, password, usertype, profile) VALUES ('$name', '$gender', '$email', '$username','$password','$usertype','$profile')";
			$result = mysqli_query($data, $query);
			if($result){
				$message = "User Registered Successfully.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}else{
				echo "Error ".mysqli_error($data);
			}
		}
	}
?>
<!-- END OF PHP CODE BLOCK -->
<!DOCTYPE html>
<html>
<head>
  <title>Account Creation</title>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
  <style type="text/css">
  	.form-group {
  		margin-bottom: 10px;
		}
		body{   
    	background-image: url('cvsu.jpg');
			background-repeat: no-repeat, repeat;
			background-size: cover;
			background-position: center;
			height: 575px;
			margin-top: -15px;
		}  
		#form{  
    	border: solid darkgreen 5px;  
			width: 55%; 
    	height: 400px; 
			border-radius: 10px;  
    	margin: 45px auto;  
   		background: white;  
   		padding: 50px;  
    	background-color: white;
		}  
		#ca{  
    	color: #fff;  
    	background: darkgreen;  
    	padding: 7px;  
    	margin-left: 75%;  
		}  
		h1, h3{
			font-family: 'Abril Fatface', cursive;
			text-align: center;
			color: darkgreen;
		}
		label, input{
			text-align: center;
			font-family: 'Gruppo', cursive;
			font-weight: bold;
			font-size: 18px;
			color: #729d39;
			margin-left: 5%; 
			border-radius: 10px;
		}

		select{
			text-align: center;
			font-family: 'Gruppo', cursive;
			font-weight: bolder;
			font-size: 15px;
			color: green;
			margin-left: 3px;
			border-radius: 10px;
		}
  </style>
  <script type="text/javascript">
  	function validateForm(){
  		let name = document.forms["form"]["name"].value;
  		if (name.length < 1 || /[^a-zA-Z ]/.test(name)) {
    		alert("Please enter a valid name.");
    		return false;
  		}

  		let gender = document.forms["form"]["gender"].value;
  		if (gender == ""){
  			alert("Gender must be chosen.");
  			return false;
  		}

  		let email = document.forms["form"]["email"].value;
  		if (!/\S+@\S+\.\S+/.test(email)) {
    		alert("Please enter a valid email address.");
    		return false;
  		}

  		let username = document.forms["form"]["username"].value;
  		if (username.length < 8) {
    		alert("Please enter a username that is at least 8 characters long.");
    		return false;
  		}

  		let password = document.forms["form"]["password"].value;
  		if (password.length < 8 || !/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/\d/.test(password)) {
    		alert("Please enter a password that is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number.");
    		return false;
  		}

  		let conPass = document.forms["form"]["confirm-password"].value;
  		if (password !== conPass) {
    		alert("The confirm password does not match the password.");
    		return false;
  		}

  		let usertype = document.forms["form"]["user-type"].value;
  		if (usertype == ""){
  			alert("User type must be chosen.");
  			return false;
  		}

  		let profile = document.forms["form"]["image"].value;
  		if (profile == ""){
  			alert("Insert image to upload for your profile.");
  			return false;
  		}
  		return true;
  	}
  </script>
</head>
<body>
	<div id = "form">
	<h1>STUDENT PUBLICATION SYSTEM</h1> 
    <h3>- - - Account Creation Form - - - </h3>
  <form name="form" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"  style="margin-left: 15%;">
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      	<select id="gender" name="gender">
      		<option value="">-- Select Gender --</option>
      		<option value="male">Male</option>
      		<option value="female">Female</option>
      		<option value="others">Others</option>
    	</select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  style="margin-left: 23%;">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"  style="margin-left: 16%;">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"  style="margin-left: 17%;">
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" >
    </div>
    <div class="form-group">
    	<label for="user-type">Select User Type:</label>
    	<select id="user-type" name="user-type">
      		<option value="">-- Select User Type --</option>
      		<option value="admin">Admin</option>
      		<option value="editor">Editor</option>
      		<option value="staff">Staff</option>
    		</select>
    </div>
    <div class="form-group">
      <label for="profile">Insert Image Profile:</label>
      <input id="profile" type="file" name="profile" accept="image/*">
    </div>
    <input type="submit" name="submit" value="Create Account" id="ca">
  </form>
  </div>
</body>
</html>