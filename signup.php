<?php 
session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        
		$email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
       
		
       
		if(!empty($email) && !empty($password) &&  !is_numeric($email) )
		{

			//save to database
            $user_id = random_num(10);
          
			$query = "insert into users ( user_id ,firstname , lastname ,   email , password) values ( '$user_id' ,'$firstname','$lastname', '$email' , '$password')" ;
            $user_id = random_num(12);
           

			mysqli_query($con , $query); 


			header("Location: login.php");
           
			die;
		}else
		{
            //function_alert("Enter Valid Information !!");
            header("Location: signup.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>sign up</title>
</head>

<body class="text-gray-400 bg-gray-900 body-font">

<header class="text-gray-400 bg-gray-900 body-font">
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

    <section>
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center" id="box"
        >
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0" >
                <h1 class="title-font font-medium text-3xl text-white">University Admission System</h1>
                <p class="leading-relaxed mt-4">Register today! Our admission form has an easy and user friendly
                    interface which can be understood by everyone </p>
            </div>


            <form
                class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0" method = "post" >



                <h2 class="text-white text-lg font-medium title-font mb-5">Register </h2>
                <div class="relative mb-4">
                    <label for="first-name" class="leading-7 text-sm text-gray-400">First Name</label>
                    <input type="text" id="first-name" name="firstname"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                    <label for="last-name" class="leading-7 text-sm text-gray-400">Last Name</label>
                    <input type="text" id="last-name" name="lastname"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                
                
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                    <label for="full-name" class="leading-7 text-sm text-gray-400">Create password</label>
                    <input type="password" id="full-name" name="password"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative mb-4">
                    <label for="confirmpassword" class="leading-7 text-sm text-gray-400">Confirm password</label>
                    <input type="password" onmouseout="validatepassword()" id="confirmpassword" name="confirmpassword" 
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" >
                </div>


                


                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                    <p>Already have an account ? <a href="login.php">Click here</a></p>



            </form>

        </div>

    </section>
    




</body>
<style>
    body {
        background: #FC466B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3F5EFB, #FC466B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3F5EFB, #FC466B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




    }
    header
    {
        background: #FC466B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3F5EFB, #FC466B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3F5EFB, #FC466B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    p{
         margin-top:20px;
    }
    a{
         
          font-weight:bold;
          cursor:pointer;
    }
   
   
    
</style>

</html>
