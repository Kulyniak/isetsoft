<?php
require '../connection.php';
if(isset($_GET['deleteid']))//with get check url
{
    $id = $_GET['deleteid'];

    $sql = "delete from `products` where prod_id = $id";
    $res = mysqli_query($con, $sql);
    if($res){
       // echo "Deleted successfully";
       header('location:displayproduct.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>