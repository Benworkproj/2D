<?php
include("conn.php");
$id=$_REQUEST['id'];
$query="DELETE FROM users WHERE ID=$id";
$result = mysqli_query($conn, $query);
header("Location: addirectory.php");
exit();

echo"<script>alert('Deleted successfully!')</script>";

?>
