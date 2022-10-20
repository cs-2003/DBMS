<?php
session_start();
include("connect.php");
include("functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Index</title>
</head>
<body>
    <h1>Hello!</h1>
    <br>
   <h2><?php echo $user_data['firstname']?></h2> 
   <br>
    <a href="logout.php">Logout</a>
</body>
</html>