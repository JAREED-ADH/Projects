
<?php 
session_start();
include ('header/header_admin.php');

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
    <title>Admin Profile</title>
    
   
</head>

    
</body>

         
  <?php
    
   $username=$_SESSION['user_name'];
 $sql = "SELECT * FROM admin_table WHERE user_name='$username'";
  
 $result = mysqli_query($conn,$sql);
 $row = $result->fetch_assoc();

 
  ?>
  
 <div class="">
   <div class="">
    <label class="li">User Name:</label>
  <?php echo $row['user_name']; ?>
  </div>
  
</div>

<?php  
include 'footer.php';
?>
</body>
</html>
 
 