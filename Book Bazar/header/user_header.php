<?php
    include('db/connection.php');
    
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <style><?php include('website.css');?></style> -->
	<link rel="stylesheet" href="website.css?v=<?php echo time(); ?>">
   
     <link rel="stylesheet" type="text/css" href="formstyle.css">
	 <script src="validation.js"></script>
	<script src="https://kit.fontawesome.com/d2d0bab051.js"  crossorigin="anonymous"></script>

</head>
<body>

	
	<div class="head">
	<img src="img/logo.png ">
	<nav >
        <ul>
            <li><a href="home.php">Home </a></li>
            <li><a href="#footer">Contact Us</a></li>
            <li><a href="#"><i class="fa-solid fa-user-graduate"></i>icon</a>
                <ul>
                    <li><a href="user_loginpage.php">Login</a></li>
                    <li><a href="Registerpage.php">Register</a></li>
                </ul>
            </li>
           
        </ul>
        </nav>
</body>
</html>