<?php 


	
	   
	   
	   $errors= [];
	   $errors1= [];
	   $errors2= [];

	   if($_SERVER["REQUEST_METHOD"] == "POST")
	   {
		include('db/connection.php');
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
		   }
		  
		   else if(mysqli_num_rows($result1) > 0) 
		   {
			   $errors1['info'] = 'Email already exists';
			   $errors1['status'] = true;
		   }
		   
		   else if(mysqli_num_rows($result2) > 0) 
		   {
			   $errors2['info'] = 'Phone Number already exists';
			   $errors2['status'] = true;
		   }
		
		else{
		$sql="INSERT INTO user_table(full_name,user_name,address,phone,email,password)
		VALUES('$name','$username','$address','$phone','$email','$password')";
	   mysqli_query($conn,$sql) or die("Query unsuccessful") ;
	   Header('Location:user_loginpage.php');
		}
	   }
	   ?>
	

	<?php 
	session_start();
	include 'header/user_header.php';
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="website.css">

</head>
<body>
  
    
	  <form action="" method="post" novalidate onsubmit="return validateForm()">
            Full Name :<input type="text" placeholder="Enter Fullname" name="name" id='name' required><br/><br/>
			<p id="fn"></p><br>
            Address :<input type="text"  placeholder="Enter Address" name="address" id="address"required><br/><br/>
			<p id="a"></p><br>
            Phone Number :<input type="text" placeholder="Enter Phone Number" name="phone"id="phone" required><br/>
            <p id="pn"  ><?php if(isset($errors2['status'])&& $errors2['status']){ echo $errors2['info'] ;} ?></p>
            Email :<input type="text"  placeholder="Enter Email ID" name="email" id="email"required><br/>
            <p id="e"><?php if(isset($errors1['status'])&& $errors1['status']){ echo $errors1['info'] ;} ?></p>
           
            Username :<input type="text"   placeholder="Create Username" name="uname" id="uname"required><br/>
            <p id="un" ><?php if(isset($errors['status'])&& $errors['status']){ echo $errors['info'] ;} ?></p>
            Password :<input type="password" i placeholder="Create Password" name="password"id="password"required><br/><br/>
			<p id="pw"></p>
			Confirm Password  :<input type="password" placeholder="Confirm Password" name="confirmpassword"id="confirmpassword"required><br/><br/>
			<p id="cpw" ></p>
            <input type="submit" name="submit"value="Submit">  
       </form>
	   <?php include'footer.php';?>
</body>

</html>