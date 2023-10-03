<?php  

if(isset($_POST['submit']))
    {
        echo "here"; die();
        
    $bookname=$_POST['book_name'];
       $author=$_POST['author'];
       $price=$_POST['price'];
       $description=$_POST['description'];
       $category_id=$_POST['category_id'];
       $image =$_FILES['image'];
       
	//    print_r($image);

		$filename=$image['name'];
		$filetemp=$image['tmp_name'];

		// $fileex=explode('.',$filename);
	   $destinationfile='upload/'.$filename;
	   move_uploaded_file($filetemp,$destinationfile);


         
        $sql= "  UPDATE book
                 SET  book_name='$bookname', author='$author',price='$price', description='$description',
         category_id='$category_id', image='$destinationfile' WHERE book_id='$id'";

         echo $sql; die();

        //  WHERE user_name=$username AND password=$password";

        $result = mysqli_query($conn, $sql);
            if($result){
                echo 'updated ';
            }
          
     

              

           
           } 


?>