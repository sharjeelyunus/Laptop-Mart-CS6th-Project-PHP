<?php
include"connection.php";
$sql = "SELECT * from products";
$result=mysqli_query($conn,$sql);
include_once("menu_admin.html");
?>

<?php
$connect = new PDO("mysql:host=localhost;dbname=laptop", "root", "");

if(isset($_COOKIE["type"]))
{
 header("location:admin.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "SELECT * FROM user_details WHERE user_email = :user_email";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'user_email' => $_POST["user_email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["user_password"], $row["user_password"]))
    {
     setcookie("type", $row["user_name"], time()+3600);
     header("location:admin.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Laptop CMS | Login</title>
    </head>
    <body>
        <section style="background-color: #23272B; padding-top: 40px; padding-bottom: 47px;">
            <div class="container py-5 h-auto">
                <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="d-flex align-items-center">
                        <div class="card-body px-4 py-3 text-black">
                            
                            <form method="post">

                            <div class="d-flex align-items-center mb-3 pb-1">
                                <span class="h1 fw-bold mb-0">Laptop</span>
                            </div>

                            <h5 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Sign into your account</h5>

                            <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Email address</label>
                                <input type="email" name="user_email" id="user_email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-2">
                            <label class="form-label"  for="form2Example27">Password</label>
                                <input type="password" name="user_password" id="user_password" class="form-control form-control-lg" />
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="login" id="login">Login</button>
                            </div>
                            </form>
                            <span><?php echo $message; ?></span>

                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>
