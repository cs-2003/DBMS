<?php 

session_start();

  include("connect.php");
    include("functions.php");
   

    //something was posted
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		

 
    $email = $_POST['email'];
    $password = $_POST['password'];

    //read from database
    $query = "select * from users where email = '$email' limit 1";
    $result = mysqli_query($con, $query);

    $user_data = mysqli_fetch_assoc($result);
          
        if($user_data['password'] === $password)
        {

          $_SESSION['user_id'] = $user_data['user_id'];
                   
          header("Location: http://localhost/University_Admission/index.php");
          die;
          
        }
        else
        {
          
          header("Location: http://localhost/University_Admission/login.php");
          
        }
	}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Admission</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="text-gray-400 bg-gray-900 body-font" style="background: linear-gradient(120deg,#2980b9, #8e44ad);">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">


            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="mr-5 hover:text-white">Learn More</a>
                <a class="mr-5 hover:text-white" href="http://localhost/University_Admission/contactus.php">Contact us</a>

            </nav>
            <a class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
                href="main.html">Home
                
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </header>

    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="Email" id="email"  name = "email" required>
                <label for="rno">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password"  name = "password" required>
                <label for="password">Password</label>

            </div>
            <div class="pass">Forgot Password ?</div>
            <input type="submit" value="Login">
            <div class="signup">
                New Admission ? <a href="signup.php">sign up</a>
            </div>



        </form>
    </div>
</body>
<style>
   a:hover {
    cursor:pointer;
   }
</style>

</html>