<?php
include("conn.php");
$id=$_REQUEST['id'];
$query = "SELECT * FROM users WHERE ID='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="alumnistyle.css">

</head>
<body>
<div class="row">
		<div class="col-sm-4" style="background-color: #449F73;">
			<a href="adminlanding.php"><img src="logo.png" style="width: 70%; padding-left: 10%; padding: 10px 10px 10px 10px; max-height: 78px;"></a>
		</div>
		<div class="col-sm-4" style="background-color: #449F73;">

		</div>
		<div class="col-sm-4" style="background-color: #449F73;" id="alumniname">
			<?php
			session_start();
			echo "<a href='#' style='color: black; text-decoration: none'><p style='margin-top: 9px;'>".$_SESSION['adUser'] ."  ".$_SESSION['adID']."</p></a>";

			include("conn.php");
			?>
		</div>
</div>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<a href="adminlanding.php">Home</a>
	<a href="addirectory.php">Directory</a>
	<a href="adlogin.php">Logout</a>


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


<div class="row" style="display: flex; justify-content: center;">
			<div class="col-lg-2">

			</div>

			<div class="col-lg-8" style="background-color: #CCCCCC; width: 90%; border-radius: 15px; max-width: 700px;">
				<form name="form" method="POST" action="" id="editform">
					Name: &nbsp; &nbsp;<input type="text" name="name" value="<?php echo $row['Name']; ?>"><br>
					
					Course: <input type="text" name="course" value="<?php echo $row['Course']; ?>"><br>

					Year: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="year" value="<?php echo $row['Year']; ?>"> 	<br>

					<input type="submit" name="submit" value="Edit">

					<button><a href="addirectory.php">Back</a></button>
				</form>
				<?php 


				$status = '';
				if(isset($_POST['submit']))
				{
					$id=$_REQUEST['id'];
					$name=$_REQUEST['name'];
					$course=$_REQUEST['course'];
					$year=$_REQUEST['year'];

					$update="UPDATE users SET Name='".$name."', Course='".$course."', Year='".$year."' WHERE ID='".$id."'";
					mysqli_query($conn, $update); 
					$status = "Record Edited Successfully. <br><br>
					<a href='adedit.php?id=".$row['ID']."'>View Updated Record</a>";
					echo '<p style="color:#FF0000;">'.$status.'</p>';}
				else
				{
				?>

			</div>
			
			<?php } ?>
			<div class="col-lg-2">

			</div>
</div>	


</div>
</body>
</html>