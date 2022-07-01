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

		$allowTypes = array('jpg','png','jpeg','gif');
		if(in_array($fileType, $allowTypes)){
			if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
				$sql = "INSERT into products VALUES ($id, '$pname', '$company', $generation, '$price', $rom, $ram, '$cpu', '$color','".$fileName."')";
			}else{
				$statusMsg = "Sorry, there was an error uploading your file.";
			}
		}else{
			$statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
		}

		if (mysqli_query($conn, $sql)) {
			echo "Record inserted successfully";
			header("location:viewall.php");
		} else 
			echo "some problem";
	}
?>