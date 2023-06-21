<!-- PHP CODE BLOCK -->
<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['submit'])){
			$task_title = $_POST['name'];
			$task_cat = $_POST['cat'];
			$task_deadline = $_POST['task_deadline'];
			$task_status = $_POST['task_status'];
			$task_level = $_POST['task_level'];
			$task_assignto = $_POST['asto'];
			
			$query = "INSERT INTO task (task_title, task_cat, task_deadline, task_status, task_level, task_assignto) VALUES ('$task_title ', '$task_cat', '$task_deadline', '$task_status', '$task_level', '$task_assignto')";
			if(mysqli_query($data, $query)){
				$message = "New category has been added.";
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
    	margin: 100px auto;  
   		background: white;  
   		padding: 40px;  
    	background-color: white;
    	margin-top: 75px;
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
  <!--<script type="text/javascript">
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
  </script>-->
</head>
<body>
	<div id = "form">
	<h1>STUDENT PUBLICATION SYSTEM</h1> 
    <h3>- - - Add New Task Form - - - </h3>
  <form name="form" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="name">Task Name:</label>
      <input type="text" id="name" name="name"  style="margin-left: 15%; width: 300px;">
    </div>
    <div class="form-group">
      <label for="cat">Task Category:</label>
      <select name="cat">
      	<option value="">-- Select Category --</option>
      	<?php
      		$sql = "SELECT * FROM category";
					$result = mysqli_query($data, $sql);
					$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

					foreach ($users as $users) {
						echo "<option>{$users['cat_name']}</option>";
					}	
      	?>
      </select>
    </div>
    <div class="form-group">
      <label for="task_deadline">Task Deadline:</label>
      <input type="date" id="task_deadline" name="task_deadline"  style="margin-left: 15%; width: 300px;">
    </div>
    <div class="form-group">
      <label for="task_status">Task Status:</label>
      <select name="task_status">
      	<option value="">-- Select Status --</option>
      	<option value="In Progress">In Progress</option>
      	<option value="Under Review">Under Review</option>
      	<option value="Ready for Publishing">Ready for Publishing</option>
      	<option value="Published">Published</option>
      </select>
    </div>
    <div class="form-group">
      <label for="task_level">Priority Level:</label>
      <select name="task_level">
      	<option value="">-- Select Priority Level --</option>
      	<option value="Urgent">Urgent</option>
      	<option value="High Priority">High Priority</option>
      	<option value="Neutral">Neutral</option>
      	<option value="Low Priority">Low Priority</option>
      	<option value="Unknown">Unknown</option>
      </select>
    </div>
    <div class="form-group">
      <label for="asto">Task Assign To:</label>
      <select name="asto">
      	<option value="">-- Select User --</option>
      	<?php
      		$sql = "SELECT * FROM login";
					$result = mysqli_query($data, $sql);
					$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

					foreach ($users as $users) {
						echo "<option>{$users['name']}</option>";
					}	
      	?>
      </select>
    </div>
    <input type="submit" value="Add New Task" id="ca">
  </form>
  </div>
</body>
</html>