
<?php 
session_start();
include 'header/header_loggedin.php';

if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}

    include('db/connection.php');
   
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    
    <link rel="stylesheet" type="text/css" href="website.css">
    <link rel="stylesheet" type="text/css" href="profile.css">

	<script src="https://kit.fontawesome.com/d2d0bab051.js" crossorigin="anonymous"></script>
</head>

    

         
         
  <?php
    
   $username=$_SESSION['user_name'];
 $sql = "SELECT * FROM user_table WHERE user_name='$username'";
  
 $result = mysqli_query($conn,$sql);
 $row = $result->fetch_assoc();

 
  ?>
  
 <div class="contents">
  <div class="top">
    <h3>My Profile</h3>
    <div class="profile-pic"></div>
    <div class="content-box">
    <p id="u">
    <?php echo $row['user_name']; ?></p>
   
    </div>
  </div>

   <div class="content-box">
    <p class="li">Name:
  <?php echo $row['full_name']; ?></p>
  </div>

   <div class="content-box">
   <p class="li">Address:
    <?php echo $row['address']; ?></p>
  </div>

  <div class="content-box">
   <p class="li">Mobile Number
   <?php echo $row['phone']; ?></p>

 </div> 
  <div class="content-box">
   <p class="li">Email:
  <?php echo $row['email']; ?></p>
</div>
</div>
<?php 
include 'footer.php';

?>
</body>
</html>
 
 