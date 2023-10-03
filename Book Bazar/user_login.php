<?php 
session_start();
// if(isset($_SESSION['user_name'])){

// 	header("Location: Homepage.php");
// }
// ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login In</title>
</head>
<body>
    <?php
         include('db/connection.php');
         

           
$username=$_POST['uname'];
$password=$_POST['password'];



         
        $sql= "  SELECT * FROM user_table WHERE user_name='$username' AND password='$password'";

        //  WHERE user_name=$username AND password=$password";

        $result = mysqli_query($conn, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //$count = mysqli_num_rows($result);  
        if(mysqli_num_rows($result)>0){
            $_SESSION['user_name'] = $username;
            while($row=mysqli_fetch_assoc($result)){
               
            $_SESSION['user_id'] =$row['user_id'];
           
            //echo "logged in";
          
               header('Location:Homepage.php');
              
            }
           
           } 
           else{  
                        echo "<h1> Login failed. Invalid username or password.</h1>";  
                    }     


 

 // redirect to user dashboard
    //echo "Logged in successfully";
   

?>
 

</body>
</html>
