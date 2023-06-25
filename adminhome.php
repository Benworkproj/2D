<!-- PHP CODE BLOCK -->
<?php
	include "database.php";
	include "header.php";
	include "sidebar.php";

	if(!isset($_SESSION["username"])){
		header("location:login.php");
	}
?>
<!-- END OF PHP CODE BLOCK -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">

	<!-- INTERNAL CSS CODE BLOCK-->
		<style type="text/css">
			.bg{background-image: url('cvsu.jpg'); background-repeat: no-repeat, repeat; background-size: cover; background-position: center; height: 575px; margin-top: -15px;}
				.main-part{width: 80%; margin: 0 auto; text-align: center; padding: 0px 5px; font-family: 'Raleway', sans-serif; margin-left: 210px;}
				.cpanel{width: 30%; display: inline-block; background-color: green; color: #fff; margin-top: 50px; border: solid 5px darkgreen; margin-right: 100px;}
				.icon-part i{font-size: 30px; padding:10px; border:5px solid darkgreen; border-radius:50%; margin-top:-25px; margin-bottom: 10px; background-color:darkgreen;}
				.icon-part p{margin:0px; font-size: 20px; padding-bottom: 10px;}
				.card-content-part{background-color: #36622B; padding: 5px 0px;}
				.cpanel .card-content-part:hover{background-color: #C3DF75; cursor: pointer;}
				.card-content-part a{color:#fff; text-decoration: none;}

				.cpanel-green .icon-part,.cpanel-green .icon-part i{background-color: green;}
				.cpanel-green .card-content-part{background-color: #36622B;}

				.cpanel-red .icon-part,.cpanel-red .icon-part i{background-color:green;}
				.cpanel-red {background-color:#36622B;}
				.cpanel-skyblue .icon-part,.cpanel-skyblue .icon-part i{background-color: green;}
				.cpanel-skyblue {background-color:#36622B;}
				h3{margin-left: 220px; margin-top: 25px; font-size: 30px; color: #F9F8D1; font-family: 'Raleway', sans-serif;}
		</style>
	<!-- END OF INTERNAL CSS CODE BLOCK-->
<body>
<div class="bg">
	<!-- DASHBOARD ANALYTICS CODE BLOCK-->
		<div class="main-part">
			<div class="cpanel">
				<div class="icon-part">
					<i class="fa fa-users fa-lg" aria-hidden="true"></i><br>
					<small>Total Number of Users</small>
					<p><?php echo $data->query("SELECT * FROM login")->num_rows; ?></p>
				</div>
			</div>
			<div class="cpanel cpanel-green">
				<div class="icon-part">
					<i class="fa fa-th-list fa-lg" aria-hidden="true"></i><br>
					<small>Total Numbers of Category</small>
					<p><?php echo $data->query("SELECT * FROM category")->num_rows; ?></p>
				</div>
			</div>
			<div class="cpanel cpanel-red">
				<div class="icon-part">
					<i class="fa fa-tasks fa-lg" aria-hidden="true"></i><br>
					<small>Total Numbers of Task</small>
					<p><?php echo $data->query("SELECT * FROM task")->num_rows; ?></p>
				</div>
			</div>
			<div class="cpanel cpanel-skyblue">
				<div class="icon-part">
					<i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><br>
					<small>Total Number of Finished Task</small>
					<p><?php echo $data->query("SELECT * FROM task WHERE task_status = 'Published'")->num_rows; ?></p>
				</div>
			</div>
		</div>
	<!-- END OF DASHBOARD ANALYTICS CODE BLOCK-->
</div>
</body>
</html>