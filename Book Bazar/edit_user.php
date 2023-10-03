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
    <title>Edit Users</title>
    
</head>

    
<body>

     <?php
     include('db/connection.php');
     if(isset($_GET['edit_id'])){
      
      $id=$_GET['edit_id'];

      $sql = "SELECT full_name, address, phone, email FROM user_table WHERE user_id='$id'";
      $result= mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result); 
      
      if(isset($_POST['submit']))
    {
        
        $name=$_POST['full_name'];
       $address=$_POST['address'];
       $phone=$_POST['phone'];
       $email=$_POST['email'];
       
       
	//    print_r($image);
        // if(isset($_FILES['image'])){
        //     $filename=$_FILES['name'];
        //     $image=$_FILES['tmp_name'];

        //     $destinationfile='upload/'.$filename;
	    //     move_uploaded_file($image,$destinationfile);
        // }
        // else{
        //     $image =$_POST['image'];

        // }
        
        $sql= "  UPDATE user_table
                 SET  full_name='$name', address='$address',phone='$phone', email='$email' WHERE user_id='$id'";

        

        //  WHERE user_name=$username AND password=$password";

        $result = mysqli_query($conn, $sql);
            if($result){
                Header('Location:users.php');
            }
          
     

              

           
           } 


?>
<form action="" method="POST">
            <span>Full Name :</span><input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" /><br/><br/>
            <span>Address :</span><input type="text" name="address" value="<?php echo $row['address']; ?>" /><br/><br/>
            <span>Phone Number :</span><input type="text"name="phone" value="<?php echo $row['phone']; ?>" /><br/><br/>
            <span>Email :</span><input type="text"  name="email" value="<?php echo $row['email']; ?>" /><br/><br/>
           

            <input type="submit" name="submit" value="Update">  
       </form>
 
<?php }
include 'footer.php'; ?>
</body>
</html>

