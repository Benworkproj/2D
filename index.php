<?php
	include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT PUBLICATION SYSTEM - CvSU Imus Campus Publication</title>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

	<style type="text/css">
		body{padding: 0px; margin: 0px; background-image: url('cvsu.jpg'); background-repeat: no-repeat; background-size: cover;}
		li{float: left; margin-left: 30px; margin-top: 15px;}
		a{text-decoration: none; color: white; font-size: 20px; font-weight: bold;}
		.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
  text-align: center;
  font-family: 'Times New Roman', sans-serif;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  border: solid 2px darkgreen;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

img{
	width: 235px;
	height: 200px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
	</style>
</head>
<body>
	<ul style="list-style-type: none; background-color: darkgreen; width: 100%; height: 50px; margin-top: 0px;">
		<li style="margin-left: 0px;"><a href="">STUDENT PUBLICATION SYSTEM</a></li>
		<li style="margin-left: 850px;"><a href="login.php">Login</a></li>
	</ul>

	<div class="main">
		<h1>STUDENT PUBLICATION SYSTEM</h1>
		<p style="text-align: center; margin-top: -23px;">Cavite State University - Imus Campus</p>
		<hr style="color: darkgreen;">
		<h2 style="text-align: center;">NEWS ARTICLES</h2>
		<?php
			$sql = "SELECT * FROM article";
			$result = mysqli_query($data, $sql);
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

			foreach ($users as $users) {
				echo "<div class = 'row'>
						<div class = 'column'>
							<div class = 'content'>
								<img src = '{$users['art_image']}'>
								<h3>{$users['art_name']}</h3>
								<p>{$users['art_cat']} | {$users['art_pubdate']} | {$users['art_author']}</p>
							</div>
						</div>
					</div>";
			}
		?>
	</div>
</body>
</html>