<?php
include '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isetsoft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 
        <button class="btn btn-primary my-5"> 
        <a href="products.php" class="text-light">
        Add product
        </a>
        
        </button>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">prod_id</th>
      <th scope="col">prod_name</th>
      <th scope="col">prod_cost</th>
      <th scope="col">prod_price</th>
      <th scope="col">prod_group</th>
      <th scope="col">operations</th>
   

    </tr>
  </thead>
  <tbody>
  <?php
  $sql = 'select * from `products`';
  $res = mysqli_query($con, $sql);
  if($res){
    while($row = mysqli_fetch_assoc($res))
   {
      $id = $row['prod_id'];
      $name = $row['prod_name'];
      $cost = $row['prod_cost'];
      $price = $row['prod_price'];
      $group = $row['prod_group'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$cost.'</td> 
      <td>'.$price.'</td>
      <td>'.$group.'</td>
      <td>
    <button class = "btn btn-primary"><a href="updateproduct.php ?updateid = '.$id.' "class = "text-light">Update</a></button>
    <button class = "btn btn-danger"><a href="deleteproduct.php ?deleteid='.$id.' "class = "text-light">Delete</a></button>
   </td>

      </tr>';
   }
  }

   ?>
   
  </tbody>
</table>


    </div>
</body>
</html>