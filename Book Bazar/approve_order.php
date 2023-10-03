<?php 
include('db/connection.php');
    if(isset($_GET['approve_id'])){

        $approve_id=$_GET['approve_id'];

        $sql="UPDATE order_table SET status='approved' WHERE  order_id=' $approve_id'";
        $result=mysqli_query($conn,$sql);
        if($result){
        header('Location:admin_orders.php');
        }
    }
?>