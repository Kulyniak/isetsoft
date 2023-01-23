<?php
require '../connection.php';
if (isset($_POST['submit'])){
    $prod_id =$_POST['prod_id'];
    $prod_name =$_POST['prod_name'];
    $prod_cost =$_POST['prod_cost'];
    $prod_price =$_POST['prod_price'];
    $prod_group =$_POST['prod_group'];
    $sql = "insert into `products` (prod_id, prod_name, prod_cost, prod_price, prod_group)
        values ('$prod_id', '$prod_name', '$prod_cost', '$prod_price', '$prod_group' )";
    $res = mysqli_query($con,$sql);//method allow to execute query
    if($res){
    header('location:displayproduct.php');
    }
    else {
    die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>isetsoft</title>
  </head>
  <body>
    <div class="container">
    <form method="post">
  <div class="form-group">
    <label for="prod_id"> Id of product</label>
    <input type="number" class="form-control" name="prod_id">
  </div>
  <div class="form-group">
    <label for="prod_name">Name of Product</label>
    <input type="text" class="form-control" name="prod_name">
  </div>
  <div class="form-group">
      <label for="prod_cost"> Cost of product</label>
      <input type ="number" class="form-control" name="prod_cost">
  </div>
        <div class="form-group">
            <label for="prod_price"> Price of product</label>
            <input type ="number" class="form-control" name ="prod_price">
        </div>
        <div class="form-group">
            <label for="prod_group"> Group of product</label>
            <input type ="text" class="form-control" name="prod_group">
        </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>       
</div>
  </body>
</html>