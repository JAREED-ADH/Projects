<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="website.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/d2d0bab051.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="formstyle.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="profile.css?v=<?php echo time(); ?>"> -->

</head>
<body>

	<div class="head">
		<img src="img/logo.png ">
		<nav>
		<ul>
			<li><a href="adminpage.php">Dashboard</a></li>
			<li><a href="Books.php">Books</a></li>
            <li><a href="users.php">Users</a></li>
			<li><a href="admin_orders.php">Orders<i class="fa-brands fa-opencart"></i></a></li>
			<li><a href="#footer">Contact Us</a></li>
			<li><a href="#"><i class="fa-solid fa-user-graduate" >icon</i></a>
                <ul>
                    <li><a href="admin_profile.php.">Admin Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>

			
		</ul>
		</nav>
	</div>
</body>
</html>