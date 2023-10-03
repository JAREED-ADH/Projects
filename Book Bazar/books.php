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
	<title>Books</title>
    
    <style>
        table,th ,td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

	
	
		 

    <h1> Books Table </h1>
    <?php
   include('db/connection.php');

   
    $sql="SELECT * FROM book";
    $result=mysqli_query($conn,$sql);
    echo"<table>";
        echo"<th> Book Id</th>";
        echo"<th> Book Title</th>";
        echo"<th>Author </th>";
        echo "<th>price</th>";
        echo"<th> Description</th>";
        echo "<th> Action </th>";
echo"</tr>";



    while($row=mysqli_fetch_assoc($result)){
        $book_id=$row['book_id'];
        $name=$row['book_name'];
        $author=$row['author'];
        $price=$row['price'];
        $description=$row['description'];
        
        //  $_SESSION['book_name']=$book_name;
  
echo "<tr>";
        echo"<td >"; echo $row['book_id'];echo"</td>";
        echo"<td >"; echo $row['book_name'];echo"</td>";
        echo"<td>"; echo $row['author'];echo"</td>";
        echo"<td>"; echo $row['price'];echo"</td>";
        echo"<td>"; echo $row['description'];echo"</td>";
        echo"<th>"; echo '<a href="edit_books.php?edit_id='.$book_id.'"><button>Edit </button></a><a href="delete_books.php?delete_id='.$book_id.'"><button> Delete</button></a>'; echo"</td>";
        echo "</tr>";
    }
        echo"</table>";
   
        ?>

<a href="book_form.php"><button type=""> Add New</button></a>

<?php include 'footer.php'; ?>
</body>
</html>
       
    

