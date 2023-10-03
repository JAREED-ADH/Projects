<?php 
	
	   include('db/connection.php');
	   
	   $errors= [];
	   $errors1= [];
	   $errors2= [];

	   if($_SERVER["REQUEST_METHOD"] == "POST")
	   {
		   
		$name=$_POST['name'];
		$username=$_POST['uname'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		

	$u = "SELECT user_name FROM user_table WHERE user_name='$username'";
	$e="SELECT email FROM user_table WHERE email='$email'";
	$p="SELECT phone FROM user_table WHERE phone='$phone'";

	$result = mysqli_query($conn,$u) or die("Query unsuccessful") ;
	$result1 = mysqli_query($conn,$e) or die("Query unsuccessful") ;
	$result2 = mysqli_query($conn,$p) or die("Query unsuccessful") ;
		   if(mysqli_num_rows($result) > 0) 
		   {
			   $errors['info'] = 'user name already exists';
			   $errors['status'] = true;
			   header('Location:Registerpage.php');
		   }
		  
		   else if(mysqli_num_rows($result1) > 0) 
		   {
			   $errors1['info'] = 'Email already exists';
			   $errors1['status'] = true;
			   header('Location:Registerpage.php');
		   }
		   
		   else if(mysqli_num_rows($result2) > 0) 
		   {
			   $errors2['info'] = 'Phone Number already exists';
			   $errors2['status'] = true;
			   header('Location:Registerpage.php');
		   }
		else{
		$sql="INSERT INTO user_table(full_name,user_name,address,phone,email,password)
		VALUES('$name','$username','$address','$phone','$email','$password')";
	   mysqli_query($conn,$sql) or die("Query unsuccessful") ;
	   Header('Location:home.php');
		}
	}
	   ?>