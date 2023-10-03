<?php 
session_start();

if(isset($_GET['delete_id'])){
	header('Location:home.php');
}

if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}
if(isset($_GET['book_id'])){
    include('db/connection.php');
    $_SESSION['book_id']=$_GET['book_id'];
    $book_id=$_SESSION['book_id'];
    $user_id=$_SESSION['user_id'];
       
    $sql = "SELECT * FROM book WHERE book_id='$book_id'";

				
 				// $sql1="SELECT* FROM book ORDER BY DESC 
 				// LIMIT 10";

				 $result = mysqli_query($conn,$sql);
 				if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
                    
      ?>
    


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome To BookBaazar!</title>
	<link rel="stylesheet" href="orderpage.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/d2d0bab051.js" crossorigin="anonymous"></script>
    <script>
      // To show total amount after selecting quantity
        function updateAmount(el)
        {
            const rate = document.getElementById('amount').innerHTML;
            const totalAmount = parseInt(rate) * parseInt(el.value);
            document.getElementById('totalAmount').innerHTML= totalAmount;
            document.getElementById('totalAmountField').value= totalAmount;
           
        }
        </script>
</head>
<body>

	<div class="head">
		<img src="img/logo.png ">
		<nav>
		<ul>
			<li><a href="Homepage.php">Home</a></li>
			<li><a href="#">Category</a>
				<ul>
					<li><a href="Fantasy.php">Fantasy</a></li>
					<li><a href="Biography.php">Biography</a></li>
					<li><a href="History.php">History</a></li>
					<li><a href="Self-Development.php">Self Development</a></li>
					<li><a href="Mythology.php">Mythology</a></li>
				</ul>
			</li>
			<li><a href="#">Orders<i class="fa-brands fa-opencart"></i></a></li>
			<li><a href="#footer">Contact Us</a></li>
			<li><a href="#"><i class="fa-solid fa-user-graduate"></i>iconss</a>
                <ul>
                    <li><a href="user_profile.php">User Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>

			
		</ul>
		</nav>
    <!-- display book details that is selected -->
                  </div>
        <div class="products">
            <div class="imageee">
            <img src="<?php echo $row['image'];?>">
                
                </div>
         <div class="info">
        <h3 id="title"><?php echo $row['book_name'];?></h3><br><br>
        Author: <?php echo $row['author'];?><br><br>
         
                 Description:<br><br> <?php echo $row['description'];?><br><br>
                 <div class="price" id="price">Price: <span id="amount"><?php echo $row['price'];?></span></div><br><br>
                
                
                <?php }}}?>

              <form action="order.php" method="POST">
                Quantity:
              <input type="number" onchange="updateAmount(this)" id="quantity" name="quantity" min="1" max="5"><br><br>
              <!-- total : <input type="hidden" id="totalAmount" name="total"> -->
              Total <span id="totalAmount" ></span><br>
              <input type="hidden" id="totalAmountField" name="total">
              <button type="submit" name="submit">Order Now</button>
                </div>
                </div>
              </form>  
              </body>
              </html>