<?php
require '../connection.php';
if(isset($_GET['deleteid']))//with get check url
{
    $id = $_GET['deleteid'];

    $sql = "delete from `orders` where ord_id = '$id'";
    $res = mysqli_query($con, $sql);
    if($res){
       // echo "Deleted successfully";
       header('location:display_orders.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>