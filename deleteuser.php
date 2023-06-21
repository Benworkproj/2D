<?php
	include "database.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "DELETE FROM login WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		if(mysqli_query($data, $stmt->execute)){
			echo "<script>alert('The user has been deleted successfully.')</script>";
		}else{
			echo "<script>alert('Deleting the user failed.')</script>";
		}
	}

?>