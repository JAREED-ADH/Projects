<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php
         include('db/connection.php');
         

           
$username=$_POST['uname'];
$password=$_POST['password'];



         
        $sql= "  SELECT * FROM admin_table WHERE user_name='$username' AND password='$password'";

        //  WHERE user_name=$username AND password=$password";

        $result = mysqli_query($conn, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //$count = mysqli_num_rows($result);  
        if(mysqli_num_rows($result)>0){
            $_SESSION['user_name'] = $username;
            //echo "logged in";
          
               header('Location:adminpage.php');
              

           
           } 
           else{  
                        echo "<h1> Login failed. Invalid username or password.</h1>";  
                    }     


 

 // redirect to user dashboard
    //echo "Logged in successfully";
   

?>
 

</body>
</html>
