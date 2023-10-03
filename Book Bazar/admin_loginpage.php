<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Sign In</title>
     <link rel="stylesheet" type="text/css" href="website.css">
     <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
     <div class="head">
		<img src="img/logo.png ">
		<nav>
		<ul>
		<li><a href="home.php"> Home</a></li>
			<li><a href="user_loginpage.php">User Login</a></li>
			<li><a href="admin_loginpage.php">Admin Login</a></li>

			
		</ul>
		</nav>
	</div>

    
	  <form action="admin_login.php" method="post">
        <legend>Admin Login In</legend><br><br>
            Username :<input type="text" placeholder="Enter Username" name="uname"><br/><br/>
            Password :<input type="password" placeholder="Enter Password" name="password"><br/><br/>
            <input type="submit" value="Submit">  
            <a href="forgotpasswordform.php"> Forgot password? </a> <br/><br/>
            Don't have a account? <a href="Registerpage.php">Create Account</a>
       </form>
	   <?php 
	   include 'footer.php';?>
</body>
</html>