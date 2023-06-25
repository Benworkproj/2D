<!-- PHP CODE BLOCK -->
<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";
?>
<!-- END OF PHP CODE BLOCK -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Users</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<!-- CSS CODE BLOCK -->
	<style type="text/css">
		.bg{
			background-image: url('cvsu.jpg');
			background-repeat: no-repeat, repeat;
			background-size: cover;
			background-position: center;
			height: 575px;
			margin-top: -15px;
		}
		button{
			margin-top: 50px;
			margin-left: 25px;
			font-family: 'Abril Fatface', cursive;
			font-weight: bold;
			font-size: 20px;
			text-align: center;
		}
		.create {
  			background-color: white; 
  			color: darkgreen; 
  			border: 2px solid darkgreen;
		}
		.create:hover {
  			background-color: darkgreen;
  			color: white;
		}
		table{
			border: solid 2px darkgreen;
			margin-top: 50px;
			margin-left: 25px;
			border-collapse: collapse;
		}
		th{
  			padding: 8px;
  			text-align: center;
  			border-bottom: 1px solid #DDD;
  			color: white;
		}
		td {
  			padding: 8px;
  			text-align: center;
  			border-bottom: 1px solid #DDD;
  			color: black;
		}
		tr:hover {background-color: antiquewhite;}
	</style>
<!-- END OF CSS CODE BLOCK -->
</head>
<body>
	<div class="bg">	
		<a href="newcat.php"><button class="create"><i class="fa fa-plus" aria-hidden="true" style="color: darkgreen;"></i> Add Category</button>
	<!-- PHP CODE BLOCK -->
		<!-- LIST OF USERS FROM THE DATABASE-->
		<?php
			$sql = "SELECT * FROM category";
			$result = mysqli_query($data, $sql);
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

			echo "<center><table border = '2' width = '900px' style = 'border-collapse: collapse;'>
					<thead style = 'background-color: green;'>
						<th><center>ID</center></th>
						<th><center>Catgory Name</center></th>
						<th><center>Category Description</center></th>
						<th><center>Action Buttons</center></th> </thead>"; 
				
			foreach ($users as $users) {
				echo "<tr>";
    			echo "<td>{$users['cat_id']}</td>";
    			echo "<td>{$users['cat_name']}</td>";
    			echo "<td>{$users['cat_desc']}</td>";
   				echo "<td><a href='#'><i class='fa fa-pencil-square fa-lg' aria-hidden='true' style = 'color: green';></i><a href='#'><i class='fa fa-trash fa-lg' aria-hidden='true' style = 'color: green';></i></td>";
    			echo "</tr>";
			}
		?>
	<!-- END OF PHP CODE BLOCK -->
	</div>
</body>
</html>