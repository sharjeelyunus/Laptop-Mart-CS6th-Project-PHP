<?php
    include "connection.php";
    include_once("menu_admin.html");
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
      label {
        font-weight: bold;
        color: white;
      }
    </style>
  </head>
    <body style="background-color: #23272B;">
        <div class="container">
    <div class="d-flex justify-content-center mt-5">
      <form method="post" enctype="multipart/form-data" action="updatedata.php">
      <div class="d-flex">
      <div class="form-group mr-3">
                <label>Id</label>
                <input
                  type="text"
                  id="id"
                  name="id"
                  value="<?php echo $row['id'] ?>"
                  class="form-control"
                  placeholder="Id"
                  readonly
                />
              </div>
              <div class="form-group mr-3">
                <label>Laptop Name</label>
                <input
                  type="text"
                  id="name"
                  name="pname"
                  class="form-control"
                  placeholder="Laptop Name"
                  value="<?php echo $row['pname'] ?>"
                />
              </div>
              <div class="form-group mr-3">
                <label>Company / Brand </label>
                <input
                  type="text"
                  id="company"
                  name="company"
                  class="form-control"
                  placeholder="Brand"
                  value="<?php echo $row['company'] ?>"
                />
              </div>
              <div class="form-group">
                <label>CPU</label>
                <input
                  type="text"
                  id="cpu"
                  name="cpu"
                  class="form-control"
                  placeholder="CPU"
                  value="<?php echo $row['cpu'] ?>"
                />
              </div>
            </div>
            <div class="d-flex">
              <div class="form-group mr-3">
                <label>Generation</label>
                <input
                  type="text"
                  id="generation"
                  name="generation"
                  class="form-control"
                  placeholder="Generation"
                  value="<?php echo $row['generation'] ?>"
                />
              </div>
              <div class="form-group mr-3">
                <label>Price</label>
                <input
                  type="text"
                  id="price"
                  name="price"
                  class="form-control"
                  placeholder="Price"
                  value="<?php echo $row['price'] ?>"
                />
              </div>
              <div class="form-group mr-3">
                <label>ROM</label>
                <input
                  type="text"
                  id="rom"
                  name="rom"
                  class="form-control"
                  placeholder="ROM"
                  value="<?php echo $row['rom'] ?>"
                />
            </div>
            <div class="form-group">
                <label>RAM</label>
                <input
                  type="text"
                  id="ram"
                  name="ram"
                  class="form-control"
                  placeholder="RAM"
                  value="<?php echo $row['ram'] ?>"
                />
              </div>
            </div>
            <div class="d-flex">
              <div class="form-group mr-3">
                <label>Color</label>
                <input
                  type="text"
                  id="color"
                  name="color"
                  class="form-control"
                  placeholder="Color"
                  value="<?php echo $row['color'] ?>"
                />
              </div>
              <div class="form-group">
                <label>Image</label>
                <input
                  type="file"
                  id="image"
                  name="image"
                  class="form-control"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="submit"
                id="submit"
                name="submit"
                class="btn btn-success btn-block mt-3"
                value="Update Data"
              />
            </div>
      </form>
    </div>
  </div>
    </body>
</html>