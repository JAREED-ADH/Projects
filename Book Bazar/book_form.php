<?php 
session_start();
include ('header/header_admin.php');


if(!isset($_SESSION['user_name'])){

	header("Location: home.php");
}



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	   include ('db/connection.php');
     

       $bookname=$_POST['book_name'];
       $author=$_POST['author'];
       $price=$_POST['price'];
       $description=$_POST['description'];
       $category_id=$_POST['category_id'];
       $image =$_FILES['image'];

	  
	  
       
	   print_r($image);

		$filename=$image['name'];
		$filetemp=$image['tmp_name'];

		// $fileex=explode('.',$filename);
	   $destinationfile='upload/'.$filename;
	   move_uploaded_file($filetemp,$destinationfile);

       $sql="INSERT INTO book(book_name,author,price,description,category_id,image)
		VALUES('$bookname','$author','$price','$description','$category_id','$destinationfile')";
       
       if(mysqli_query($conn,$sql)){
		  header('Location:books.php');
		
       }
       else{
          echo "Cannot insert";  
     }
}
        ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Books</title>
    
    <link rel="stylesheet" type="text/css" href="website.css">

    <script src="https://kit.fontawesome.com/d2d0bab051.js" crossorigin="anonymous"></script>
</head>

    
<body>


<div>
	  <form action="" method="post" enctype="multipart/form-data">
            Book Name :<input type="text" name="book_name"><br/><br/>
            Author :<input type="text" name="author"><br/><br/>
           Price :<input type="text"name="price"><br/><br/>
            Description :<input type="text"  name="description"><br/><br/>
           
            Category Id :<input type="text" name="category_id"><br/><br/>
            Upload Image :<input type="file" name="image"><br/><br/>
            <input type="submit" value="Submit">  
     </form>
</div>    
</body>
</html>