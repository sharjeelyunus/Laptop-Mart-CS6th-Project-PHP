<?php
if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}
include_once("menu_admin.html");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View All Products | Laptop CMS</title>
    <link rel="stylesheet" href="bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="background-color: #23272B; color: white;">
  <div class="container">
    <div class="title mt-3">
        <h3>All Laptops</h3>
    </div>
    <div class="content" align="center">
        <table class="table table-striped" >
         <thead>
          <tr>
           <th>Id</th><th>Laptop Name</th><th>Company / Brand</th><th>CPU</th>
           <th>Generation</th><th>Price</th><th>ROM</th><th>RAM</th><th>Color</th><th>Image</th>
           <th>Updation</th><th>Deletion</th>
          </tr>
         </thead>
         <tbody>

         <?php 
         include"connection.php";
         $sql ="SELECT * FROM products";
         $result= mysqli_query($conn,$sql);
             while($rows= mysqli_fetch_assoc($result) )
            {
            
              $imageURL = 'images/'.$rows["image"];
              echo"<tr>";
              echo"<td>".$rows["id"]."</td>";
              echo"<td>".$rows['pname']."</td>";
              echo"<td>".$rows['company']."</td>";
              echo"<td>".$rows['cpu']."</td>";
              echo"<td>".$rows['generation']."</td>";
              echo"<td>".$rows['price']."</td>";
              echo"<td>".$rows['rom']."</td>";
              echo"<td>".$rows['ram']."</td>";
              echo"<td>".$rows['color']."</td>";
              echo"<td><img style='width:50px;' src='$imageURL'></td>";
              echo"<td><a class='btn btn-success' href=updateform.php?id=".$rows['id'].">Update Laptop</a></td>";
              echo"<td><a class='btn btn-danger' href=deletedata.php?id=".$rows['id'].">Delete Laptop</a></td>";
              echo"</tr>";
	         }
		   ?>
         </tbody> 
       </table>
      </div>
  </div>      
</body>
</html>