<?php
include"connection.php";

// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_REQUEST['submit']))
 {
    $id = $_REQUEST['id'];
    $pname = $_REQUEST['pname'];
    $company = $_REQUEST['company'];
    $generation = $_REQUEST['generation'];
    $price = $_REQUEST['price'];
    $rom = $_REQUEST['rom'];
    $ram = $_REQUEST['ram'];
    $cpu = $_REQUEST['cpu'];
    $color = $_REQUEST['color'];

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
    $sql =  "UPDATE products SET pname='$pname', company='$company', generation=$generation, price=$price, rom=$rom, ram=$ram, cpu='$cpu', color='$color', image='".$fileName."' WHERE id=$id";
			
	if($result = mysqli_query($conn, $sql))
	{
		header("location:viewall.php");
	}
	else
	{
		echo "Error updating record";
	}
}
?>