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
  <title>Admin Pannel | Laptop CMS</title>
 </head>
 <body style="background-color: #23272B; color: white;">
    <br>
    <br>
    <br>
  <div class="container mt-5">
   <h2 align="center">Welcome to Admin Pannel | Laptop CMS</h2>
   <br />
   <div class="d-flex justify-content-center">
   <div class="w-50">
   <div class="d-flex justify-content-center mb-5">
    <a href="insertionform.php" class="mr-5">
    <button class="btn btn-primary btn-lg btn-block" type="submit" name="login" id="login">
        Insert Data
    </button>
    </a>
    <a href="viewall.php">
    <button class="btn btn-secondary btn-lg btn-block" type="submit" name="login" id="login">
        View / Edit Data
    </button>
    </a>
   </div>
   <a href="logout.php">
   <button class="btn btn-dark btn-lg btn-block" type="submit" name="login" id="login">
        Logout
   </button>
   </div>
   </div>
   </a>
   <br />
  </div>
 </body>
</html>