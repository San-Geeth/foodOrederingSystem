<?php


$email = $_POST["txtEmail"];
$pwd = $_POST["txtPassword"];
$fname = $_POST["txtFname"];
$lname = $_POST["txtLname"];
$add = $_POST["txtAddress"];
$cno = $_POST["txtCnumber"];




		  $con = mysqli_connect("localhost:3308","root","","onlinestoredb");
			if(!$con)
			{	
				die("Cannot connect to DB server");		
			}
			$sql ="INSERT INTO `customer` (`e-mail`, `password`, `firstName`, `lastName`, `address`, `contactNo`) VALUES ('".$email."', '".$pwd."', '".$fname."', '".$lname."', '".$add."', '".$cno."');";	
				
			mysqli_query($con,$sql);

			mysqli_close($con);
			header('Location:login.php');

?>