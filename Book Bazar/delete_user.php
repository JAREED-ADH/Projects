<?php 
include('db/connection.php');
    if(isset($_GET['delete_id'])){

        $id=$_GET['delete_id'];

        $sql="DELETE FROM user_table WHERE user_id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
        header('Location:users.php');
        }
    }
?>