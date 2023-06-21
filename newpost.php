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
  <link rel="stylesheet" type="text/css" href="texteditor.css">
  <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">

  <script type="text/javascript">
  	function validateForm(){
  		let name = document.forms["form"]["name"].value;
  		if (name.length < 1 || /[^a-zA-Z ]/.test(name)) {
    		alert("Please enter the article's name.");
    		return false;
  		}

  		let cat = document.forms["form"]["cat"].value;
  		if (!/\S+@\S+\.\S+/.test(desc)) {
    		alert("Please enter the category of the article.");
    		return false;
  		}
  		return true;
  	}
  		
  </script>
</head>
<body>
	<div id = "form">
	<h1>STUDENT PUBLICATION SYSTEM</h1> 
    <h3>- - - Add New Article Form - - - </h3>
  <form name="form" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="name">Article Name:</label>
      <input type="text" id="name" name="name"  style="margin-left: 15%; width: 300px;">
    </div>
    <div class="form-group">
      <label for="cat">Category:</label>
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
      <label for="date">Date:</label>
      <input type="date" id="date" name="date"  style="margin-left: 15%; width: 300px;" required>
    </div>
    <div class="form-group">
      <label for="o2r">Author:</label>
      <input type="text" id="o2r" name="o2r"  style="margin-left: 15%; width: 300px;" required>
    </div>
    <div class="form-group">
    	
    </div>
    <input type="submit" value="Add New Article" id="ca">
  </form>
  </div>
</body>
</html>