<?php 
session_start();
include ('header/header_admin.php');

if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	   include ('db/connection.php');
     

    $username=$_POST['user_name'];
       $name=$_POST['full_name'];
       $address=$_POST['address'];
       $phone=$_POST['phone'];
       $email=$_POST['email'];
       

       $sql="INSERT INTO user_table(user_name,full_name,address,phone,email)
		VALUES('$username','$name','$address','$phone','$email')";
       
       if(mysqli_query($conn,$sql)){
		  header('Location:users.php');
		
       }
       else{
          echo "Cannot insert";  
     }
}
        ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add User</title>
   
</head>

    
<body>

<div>
	  <form action="" method="post"">
      User Name :<input type="text" name="user_name"><br/><br/>
            Full Name :<input type="text" name="full_name"><br/><br/>
            Address :<input type="text" name="address"><br/><br/>
           Phone :<input type="text"name="phone"><br/><br/>
            Email :<input type="text"  name="email"><br/><br/>
           
            
            <input type="submit" name="submit" value="Submit">  
     </form>
</div>
<?php include 'footer.php';?>    
</body>
</html>