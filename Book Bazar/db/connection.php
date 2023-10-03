<?php 
	
$servername = "localhost";

$username = "root";

$password = "root";

$database ="bookbazaar_db";

// Create connection

 $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
    
    }

   // echo "Connected Successfully";

// if ($conn->connect_error) {

// die("Connection failed: " . $conn->connect_error);

// }

// echo "Connected successfully";

?>


