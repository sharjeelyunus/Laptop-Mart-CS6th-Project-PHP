<?php
    include_once("menu.html");
    include "connection.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    if ($result = mysqli_query($conn, $sql))
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Product | Laptop CMS</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/mystyle.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
    </style>
  </head>
    <body>
            <div class="d-flex justify-content-center" style="margin-top:150px;">
                <div class="mr-5">
                    <img style="width:250px;" src="images/<?php echo $row['image'] ?>" alt="">
                </div>
                <div>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $row['pname'] ?></td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td><?php echo $row['company'] ?></td>
                        </tr>
                        <tr>
                            <td>Generation</td>
                            <td><?php echo $row['generation'] ?>th</td>
                        </tr>
                        <tr>
                            <td>CPU</td>
                            <td><?php echo $row['cpu'] ?></td>
                        </tr>
                        <tr>
                            <td>ROM</td>
                            <td><?php echo $row['rom'] ?>GB</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td><?php echo $row['ram'] ?>GB</td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td><?php echo $row['color'] ?></td>
                        </tr>
                        
                            <tr>
                                <td><strong>Price</strong></td>
                                <td><strong>RS. <?php echo $row['price'] ?></strong></td>
                            </tr>
                        
                    </table>
                </div>
            </div>
    </body>
</html>