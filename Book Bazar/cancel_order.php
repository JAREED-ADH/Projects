<?php 
include('db/connection.php');
    if(isset($_GET['cancel_id'])){

        $cancel_id=$_GET['cancel_id'];

        $sql="UPDATE order_table SET status='canceled' WHERE  order_id=' $cancel_id'";
        $result=mysqli_query($conn,$sql);
        if($result){
        header('Location:admin_orders.php');
        }
    }
?>