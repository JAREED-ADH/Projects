<?php 
session_start();
include ('header/header_admin.php');

if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>


	
<h1> Users Table </h1>
    <?php
   include('db/connection.php');
    $sql="SELECT * FROM user_table";
    $result=mysqli_query($conn,$sql);
    echo"<table class= 'tblfun'>";
        echo"<tr>";
        echo"<th> User_id</th>";
        echo"<th>Full Name </th>";
        echo "<th>Username</th>";
        echo"<th> Address</th>";
        echo "<th> Email </th>";
        echo "<th> Phone </th>";
        echo "<th> Action </th>";

echo"</tr>";



    while($row=mysqli_fetch_assoc($result)){
        $user_id=$row['user_id'];
       
  
  
echo "<tr>";
        echo"<td >"; echo $row['user_id'];echo"</td>";
        echo"<td>"; echo $row['full_name'];echo"</td>";
        echo"<td>"; echo $row['user_name'];echo"</td>";
        echo"<td>"; echo $row['address'];echo"</td>";
        echo"<td>"; echo $row['email'];echo"</td>";
        echo"<td>"; echo $row['phone'];echo"</td>";
        echo"<th>"; echo '<a href="edit_user.php?edit_id='.$user_id.'"><button>Edit </button></a><a href="delete_user.php?delete_id='.$user_id.'"><button> Delete</button></a>'; echo"</td>";
        echo "</tr>";
    }
        echo"</table>";
    
        ?>
        <a href="user_form.php"><button> Add User</button>
    <div class="footer" id="footer">
        <div class="contact">
            <p >Contact Us</p>
            <p >Phone no: 9863704589<br/>
                Email: bookbaazar@gmail.com</p>
        </div>
        <div class="social">
            <p>Socials:</p>
			<img src="img/fb.png">
            <img src="img/insta.png">
        </div>
    </div>
</body>
</html>