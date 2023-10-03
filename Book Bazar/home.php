<?php
session_start();
if(isset($_SESSION['user_name'])){

	header("Location: Homepage.php");
} 
include 'header/user_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome To BookBaazar!</title>
	
</head>
<body>
	



	</div>
	<div class="content">
        <div class="desc">
        <h1> Conquer With <br/> The Power Of Knowledge!</h1>
        <p> Books give a soul to the universe, wings to the mind, flight to the imagination,<br> and life to everything.</p>
        <a href="#bs" class="btn"><p>Explore Now!&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p></a>
        </div>
       
        <div class="box">
		<?php 
			include 'db/connection.php';
		$sql = "SELECT * FROM book 
 				LIMIT 3";
				$result = mysqli_query($conn,$sql);
 				if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){?>
            <div class="shows">
                <img src="<?php echo $row['image'];?>">
               
            </div>
        <?php }}?>
 
        </div>
    </div>
 
 

	<div class="home">
	
	
		<!--PRODUCTS CONTENT HERE!!-->

		<div class="container">
	
			<h2 id="bs"> Best Sellers</h2>

			<div class="products-container">
				<?php $sql = "SELECT * FROM book 
 				LIMIT 10";
 				// $sql1="SELECT* FROM book ORDER BY DESC 
 				// LIMIT 10";

				 $result = mysqli_query($conn,$sql);
 				if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){?>

				<div class="products">
					<img src="<?php echo $row['image'];?>">
					<h3><?php 
 					echo $row['book_name'];?></h3>
					<div class="price">Price: <?php echo $row['price'];?></div>
					<a href="user_loginpage.php" class="btn"><p>Order Now!&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p></a>
				</div>
			
				<?php }}?>
			</div>
				<hr>
				<h3>Recent Selling</h3>
			<div class="products-container">
					<?php 
 				$sql1="SELECT* FROM book ORDER BY book_id DESC 
 				LIMIT 10";

				 $result1 = mysqli_query($conn,$sql1);
 				if(mysqli_num_rows($result1)>0){
				while($row = mysqli_fetch_assoc($result1)){?>
				<div class="products">
					<img src="<?php echo $row['image'];?>">
					<h3><?php echo $row['book_name'];?></h3>
					<div class="price">Price: <?php echo $row['price'];?></div>
					<a href="user_loginpage.php" class="btn"><p>Order Now!&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p></a>
				</div>
				<?php }}?>
				
			</div> 
		</div> 
		 
				</div>
<?php
include'footer.php';
?>


</body>
</html>