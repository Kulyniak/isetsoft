
<?php
require '../connection.php';
$id = $_GET['updateid_'];

if (isset($_POST['submit'])){
    $gr_id =$_POST['gr_id'];
    $gr_name =$_POST['gr_name'];
    $gr_temp =$_POST['gr_temp'];
    $sql = "update `product_groups` set gr_id = '$gr_id' , gr_name = '$gr_name',   
    gr_temp = '$gr_temp' where gr_id = '$id'";
    $res = mysqli_query($con,$sql);//method allow to execute query
    if($res){
    header('location:displayproduct_groups.php');
    //header('location:display.php');
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
    <label for="gr_id"> Id of product group </label>
    <input type="number" class="form-control" name="gr_id">
  </div>
  <div class="form-group">
    <label for="gr_name">Name of product group</label>
    <input type="text" class="form-control" name="gr_name">
  </div>
  <div class="form-group">
      <label for="gr_temp"> temp of product group</label>
      <input type ="number" class="form-control" name="gr_temp">
  </div>
        
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>       
</div>
  </body>
</html>