<?php 
session_start();

include 'header/header_loggedin.php';



if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}
?>
<?php
    include('db/connection.php');
   
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    
</head>

    
<body>

    <div class="home">
	
	
		<!--PRODUCTS CONTENT HERE!!-->

		<div class="container">
	
			<h3>  History Books </h3>

			<div class="products-container">
				<?php 
                
                $sql = "SELECT * FROM book,category_table WHERE book.category_id=category_table.category_id AND category_name='History' ";
 				// $sql1="SELECT* FROM book ORDER BY DESC 
 				// LIMIT 10";

				 $result = mysqli_query($conn,$sql);
 				if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
					$book_id=$row['book_id'];
					?>

				<div class="products">
					<img src="<?php echo $row['image'];?>">
					<h3><?php 
 					echo $row['book_name'];?></h3>
					<div class="price">Price: <?php echo $row['price'];?></div>
					<?php echo"<a href='order_page.php?book_id=".$book_id."' class='btn'><p>Order Now!&nbsp;&nbsp;<i class='fa-solid fa-arrow-right-long'></i></p></a>";?>
				</div>
			
				<?php }}?>
			</div>
			<?php 
			include('footer.php');
			?>
				</body>
</html>