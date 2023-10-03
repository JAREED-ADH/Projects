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
	<title>Welcome To BookBaazar!</title>
	
</head>
<body>


	
		 <h1>WELCOME ADMIN!!!!</h1>
	</div>
	<?php 
	include 'footer.php';
	?>


</body>
</html>