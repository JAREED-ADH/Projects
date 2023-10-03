
    <?php

    session_start();
    include('db/connection.php');
    
    if(isset($_SESSION['book_id'])){
      
        $user_id=$_SESSION['user_id'];
        $book_id=$_SESSION['book_id'];
        
       if(isset($_POST['submit'])){

       
        
        $quantity=$_POST['quantity'];
        $totalAmount=$_POST['total'];

        $sql="INSERT INTO order_table(user_id,book_id,quantity,total_amount)
        VALUES('$user_id','$book_id','$quantity','$totalAmount')";

        $result=mysqli_query($conn,$sql);
        
        if($result){
        echo"<script> alert('Order has been placed!');document.location='Homepage.php'</script>";
      
        }
    }}
    ?>
