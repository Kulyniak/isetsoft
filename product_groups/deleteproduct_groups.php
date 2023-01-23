<?php
require '../connection.php';
if(isset($_GET['deleteid']))//with get check url
{
    $id = $_GET['deleteid'];

    $sql = "delete from `product_groups` where gr_id = $id";
    $res = mysqli_query($con, $sql);
    if($res){
       // echo "Deleted successfully";
       header('location:displayproduct_groups.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>