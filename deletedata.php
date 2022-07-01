<?php
include"connection.php";

	 $id = $_REQUEST['id'];
	
$sql =  "DELETE FROM products WHERE id=$id";
if($result = mysqli_query($conn, $sql))
	{
		header("location:viewall.php");
	}
	else
	{
		echo "Error deleting record";
	}
?>