<?php 
include('db/connection.php');
    if(isset($_GET['delete_id'])){

        $id=$_GET['delete_id'];

        $sql="DELETE FROM book WHERE book_id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
        header('Location:books.php');
        }
    }
?>