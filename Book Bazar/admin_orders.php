<?php 
session_start();
include ('header/header_admin.php');

if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books</title>
    
    <style>
        table,th ,td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

	
	
		 

    <h1> Orders </h1>
    <?php
   include('db/connection.php');

  
    $sql="SELECT o.order_id,u.full_name,b.book_name,b.price,o.quantity,o.total_amount, o.status FROM order_table o JOIN book b ON b.book_id=o.book_id JOIN user_table u ON o.user_id=u.user_id ";
    $result=mysqli_query($conn,$sql);
    echo"<table>";
        echo"<th> Order Id</th>";
        echo"<th> Full Name</th>";
        echo"<th>Book Name </th>";
        echo "<th>Price</th>";
        echo"<th> Quantity</th>";
        echo "<th> Total Amount </th>";
        echo "<th> Status </th>";
        echo "<th> Action </th>";
echo"</tr>";



    while($row=mysqli_fetch_assoc($result)){
        $order_id=$row['order_id'];
        $fname=$row['full_name'];
        $bookname=$row['book_name'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $total=$row['total_amount'];
        $status=$row['status'];

        
        //  $_SESSION['book_name']=$book_name;
  
echo "<tr>";
        echo"<td >"; echo $row['order_id'];echo"</td>";
        echo"<td >"; echo $row['full_name'];echo"</td>";
        echo"<td>"; echo $row['book_name'];echo"</td>";
        echo"<td>"; echo $row['price'];echo"</td>";
        echo"<td>"; echo $row['quantity'];echo"</td>";
        echo"<td>"; echo $row['total_amount'];echo"</td>";
        echo"<td>"; echo $row['status'];echo"</td>";
        echo"<th>"; echo '<a href="approve_order.php?approve_id='.$order_id.'"><button>Approve </button></a><a href="cancel_order.php?cancel_id='.$order_id.'"><button>Cancel</button></a>'; echo"</td>";
        echo "</tr>";
    }
        echo"</table>";
   
        ?>

<!-- <a href="book_form.php"><button type=""> Add New</button></a> -->

<?php include 'footer.php'; ?>
</body>
</html>
       
    

