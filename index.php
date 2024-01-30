<?php
	include("config.php");
	include("session.php");
	session_start();

	if (isset($_POST["submit"]))
	{
	    $email=$_POST['email'];
	    $password=$_POST['password'];

	    $q="select * from users where user_email='$email' and user_password='$password' ";
	    $re=$con->query($q);
	    $res=$re->fetch_object();

		
	    if(isset($res)) 
	    {

	        $role=$res->user_role;
	        if ($role=='super_admin') 
	        {
	            $_SESSION["email"]=$res->email;
	            $_SESSION["password"]=$res->user_password;
				$_SESSION["uid"]=$res->user_id;
				$_SESSION["name"]=$res->user_name;
				$_SESSION["role"]=$res->user_role;

	            header("location:super_admin/index.php");
	        }
			else if ($role=='oem') 
	        {
	            $_SESSION["email"]=$res->email;
	            $_SESSION["password"]=$res->user_password;
				$_SESSION["name"]=$res->user_name;
				$_SESSION["role"]=$res->user_role;
				$_SESSION["uid"]=$res->user_id;
	            header("location:oem/index.php");
	        }
	        else if ($role=='Customer') 
	        {
	            $_SESSION["email"]=$res->email;
	            $_SESSION["password"]=$res->user_password;
				$_SESSION["name"]=$res->user_name;
				$_SESSION["role"]=$res->user_role;
				$_SESSION["uid"]=$res->user_id;
	            header("location:customer/index.php");
	        }
	    }
	    else
	    {
	    	echo"<script type='text/javascript'>alert('Incorrect email or password..please login again!')</script>";
	    }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logo.css">
	<link rel="stylesheet" href="aos.css">
    <script src="aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
</head>
<body class="bg-body">

    <div class="container p-3 my-3" >
	<a href="https://www.vijigi.com/" target="_blank" ><img class="logo-image" src="vijigi_logo.png" alt="" data-aos="zoom-out" data-aos-duration="1000"></a>
    </div>
    <div class="container  p-3 my-3 bg-dark text-white vijigiop" data-aos="fade-up" data-aos-duration="1000" style="opacity: 0.8;">
        <h1>Log in</h1>
        <form class="form" method="post" action="index.php" >
            
            <div class="form-group">
                <label for="email" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="password" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="password" name="password" clsaa="password" placeholder="Password" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-warning mt-4" value="Login" name="submit">
            </div>
			<br/>
            <div class="form-group">
				<a class="form-label mt-4" href="request.php">Contact Us</a>
            </div>
        </form>
    </div>

	<script>
        AOS.init();
    </script>
</body>
</html>