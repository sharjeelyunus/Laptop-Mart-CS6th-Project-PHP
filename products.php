<?php
include_once("menu.html");
include"connection.php";
$sql = "SELECT * from products";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background-color: #23272B; color:white">
<div style="color: white;" class="container mt-5 mb-5">
	<h1 class="text-center">Products</h1>
		<div class="row justify-content-center">
		<?php 
			while($rows=mysqli_fetch_assoc($result))
			{ ?>
			<div style="width: 300px;" class="col-sm-12 col-md-4 col-lg-3 img-thumbnail mt-3 mr-2" align="center">
			<a href="details.php?id=<?php echo $rows["id"]; ?>">
					<img class="w-100" src="images/<?php echo $rows["image"]; ?>"  class="img-thumbnail img-fluid rounded"  ><br>
					<p class='btn btn-block btn-dark'> <?php echo $rows["pname"]; ?> </p>
					<div class='btn btn-block btn-dark'> Rs. <?php echo $rows["price"]; ?> </div>
					</a>
			</div>
			<?php
			}
			?>			
				
	</div>
	</div>
</body>
</html>
<?php
include_once("footer.html");
?>
