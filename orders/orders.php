<?php
require '../connection.php';
if (isset($_POST['submit'])){
    $ord_id =$_POST['ord_id'];
    $ord_datetime =$_POST['ord_datetime'];
    $ord_prod =$_POST['ord_prod'];

    $sql = "insert `orders` (ord_id, ord_datetime, ord_prod)
        values ('$ord_id', '$ord_datetime', '$ord_prod')";
    $res = mysqli_query($con,$sql);//method allow to execute query
    if($res){
    header('location:display_orders.php');
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
    <label for="ord_id"> Id of order</label>
    <input type="number" class="form-control" name="ord_id">
  </div>
  <div class="form-group">
    <label for="prod_name">Datetime of Order</label>
    <input type="datetime-local" class="form-control" name="ord_datetime">
  </div>
  <div class="form-group">
      <label for="ord_prod"> Product of order</label>
      <input type ="number" class="form-control" name="ord_prod">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>       
</div>
  </body>
</html>