<!-- PHP CODE BLOCK -->
<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['submit'])){
			
			$query = mysqli_query($data, "INSERT INTO login (name, gender, email, username, password, usertype, profile) VALUES ('$name ', '$gender', '$email', '$username', '$password', '$usertype', '$profile')");
			if(mysqli_query($data, $query)){
				echo "New category has been added.";
			}else{
				echo "Error ".mysqli_error($conn);
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
    	height: 300px; 
			border-radius: 10px;  
    	margin: 100px auto;  
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
    		alert("Please enter the category name.");
    		return false;
  		}

  		let desc = document.forms["form"]["desc"].value;
  		if (!/\S+@\S+\.\S+/.test(desc)) {
    		alert("Please enter the description of the category.");
    		return false;
  		}
  		return true;
  	}
  </script>
</head>
<body>
	<div id = "form">
	<h1>STUDENT PUBLICATION SYSTEM</h1> 
    <h3>- - - Add New Category Form - - - </h3>
  <form name="form" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" id="name" name="name"  style="margin-left: 15%; width: 300px;">
    </div>
    <div class="form-group">
      <label for="desc">Category Description:</label>
      <input type="text" id="desc" name="desc"  style="margin-left: 8%; height: 125px; width: 300px;">
    </div>
    <input type="submit" value="Add New Category" id="ca">
  </form>
  </div>
</body>
</html>