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
    <title></title>
    
</head>

    
<body>

     <?php
     include('db/connection.php');
     if(isset($_GET['edit_id'])){
      
      $id=$_GET['edit_id'];

      $sql = "SELECT * FROM book WHERE book_id='$id'";
      $result= mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result); 
      
      if(isset($_POST['submit']))
    {
        var_dump( $_FILES['image']); die();
        
    $bookname=$_POST['book_name'];
       $author=$_POST['author'];
       $price=$_POST['price'];
       $description=$_POST['description'];
       $category_id=$_POST['category_id'];
       
	//    print_r($image);
        if(isset($_FILES['image'])){
            $filename=$_FILES['name'];
            $image=$_FILES['tmp_name'];

            $destinationfile='upload/'.$filename;
	        move_uploaded_file($image,$destinationfile);
        }
        else{
            $image =$_POST['previmage'];

        }
        
        $sql= " UPDATE book
                 SET  book_name='$bookname', author='$author',price='$price', description='$description',
         category_id='$category_id', image='$image' WHERE book_id='$id'";

         echo $sql; die();

        //  WHERE user_name=$username AND password=$password";

        $result = mysqli_query($conn, $sql);
            if($result){
                echo 'updated ';
            }
          
     

              

           
           } 


?>
<form action="" method="POST" enctype="multipart/form-data">
            <span>Book Name :</span><input type="text" name="book_name" value="<?php echo $row['book_name']; ?>" /><br/><br/>
            <span>Author :</span><input type="text" name="author" value="<?php echo $row['author']; ?>" /><br/><br/>
            <span>Price :</span><input type="text"name="price" value="<?php echo $row['price']; ?>" /><br/><br/>
            <span>Description :</span><input type="text"  name="description" value="<?php echo $row['description']; ?>" /><br/><br/>
           
            <span>Category Id :</span><input type="text" name="category_id" value="<?php echo $row['category_id']; ?>" /><br/><br/>
            <span>Upload Image :</span>
            <div>
                <img src="<?php echo $row['image']; ?>" width="175px" alt="">
            </div>
            <input type="hidden" name="previmage" value="<?php echo $row['image']; ?>">
            <input type="file" name="image" >
            <br/><br/>

            <input type="submit" name="submit" value="Update">  
       </form>
 
<?php } 
include 'footer.php';?>
</body>
</html>

