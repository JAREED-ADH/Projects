<?php
$error= [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $name = $_POST['fname'];
    echo $name ;

    if(true)
    {
        $error['info'] = 'user name already exist';
        $error['status'] = true;
    }
    else{
        $error['info'] = '';
        $error['status'] = false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

        firstname : <input name="fname" >
        <span><?php if(isset($error['status'])&& $error['status']){ echo $error['info'] ;} ?></span>
        <button type="submit">send</button>
    </form>
</body>
</html>