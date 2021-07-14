<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LogIn</title>
	<link type="text/css" rel="stylesheet" href="login1.css">

<body>
	
	<form class="box"  method="post" action="login.php">
	<img src="images/avatar.jpg" class="avatar">
	<h1>L o g i n</h1>
	<input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail address">
	<input type="password" name="txtPassword" id="Password" placeholder="Password">
		

		<?php
 		if(isset($_POST["btnLogin"]))
 		{
		  $email = $_POST["txtEmail"];
		  $password = $_POST["txtPassword"];
		  $valid = false;
		  
		  $con = mysqli_connect("localhost:3308","root","","onlinestoredb");
			if(!$con)
			{	
				die("Cannot connect to DB server");		
			}
			$sql ="SELECT * FROM `customer` WHERE `e-mail`='".$email."' and `password`='".$password."'";	
				
			$result = mysqli_query($con,$sql);

			if(mysqli_num_rows($result) >0)
			{
				$valid = true;
			}
			mysqli_close($con);

			if($valid)
				{
					$_SESSION["txtEmail"] = $email;
					header('Location:Home.php');
				}
				else
					{
						echo"Plese enter a correct
			  			user name and a password";
					}
 			}
		  ?>

	<input type="submit" name="btnLogin" value="Login">
	<a href="#">Forgot password?</a><br>
	<a href="register.php">Create new account</a>
	</form>
</body>
</head>
</html>
