<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
	<link type="text/css" rel="stylesheet" href="register1.css">
    
    
    <script type="text/javascript">
        
    function validateFirstname()
    {
        var fname = document.getElementById("txtFname").value;
        if ((fname== "" || fname == null))
        {
             alert("Please enter your first name.");
             return false;
                
         }
         return true;
    }
        
    
    function validateLastname()
    {
        var lname = document.getElementById("txtLname").value;
        if ((lname== "" || lname == null))
        {
             alert("Please enter your last name.");
             return false;
                
         }
         return true;
    }
        
        
    function validateEmail()
    {
        var email = document.getElementById("txtEmail").value;
        var at = email.indexOf("@");
	   var dt = email.lastIndexOf(".");
	   var len = email.length;
	
	   if((at < 2)||(dt-at < 2)||(len-dt < 2))
       {
		  alert("Please enter a valid email address");
		  return false;
	   }
	   return true;
    }

        
    function validateContact()
    {
	   var cno = document.getElementById("txtCnumber").value;
	   if((isNaN(cno))||(cno.length != 10))
	   {
		  alert("Please enter a valid contact number");
		  return false;
	   }
	   return true;
    }
        
    function validateAddress()
    {
        var add = document.getElementById("txtAddress").value;
        if ((add== "" || add == null))
        {
             alert("Please enter your address");
             return false;
                
        }
        return true;
    }  
    
                
    function validatePassword()
    {
	   var pwd = document.getElementById("txtPassword").value;
	   var cpwd = document.getElementById("txtCPassword").value;
	   if((pwd.length < 5)||( pwd != cpwd))
	   {
		  alert("Please enter a correct Password and enter the to Confirm password");
		  return false;
	   }
        return true;
    }
	
	function Validate()
	{
		if(validateFirstname() && validateLastname() && validateEmail() && validateContact() && validateAddress() && validatePassword())
		{
			alert("Registration is completed");
		}
		else
		{
			event.preventDefault();
		}
	}
		
    </script>
</head>

<body>
	<form class="box" id="formregister" name="formregister"  method="post" action="addUser.php">
	<img src="images/register.gif" class="register">
	<input type="text" name="txtFname" id="txtFname" placeholder="First name"  autocomplete="on" required>
	<input type="text"	name="txtLname" id="txtLname" placeholder="Last name" autocomplete="on" required>
	<input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail address" autocomplete="on" required>
	<input type="text" name="txtCnumber" id="txtCnumber" maxlength="10" placeholder="Contact number" autocomplete="on" required>
    <input type="text" name="txtAddress" id="txtAddress" placeholder="Address" autocomplete="on" required>
	<input type="password" name="txtPassword" id="txtPassword" placeholder="Create a password" required>
	<input type="password" name="CPassword" id="txtCPassword" placeholder="Confirm password" required>
	<input type="radio" name="rdoAgree" id="rdoAgree" value="Agree" required>
	<label for="radio">I have read and agree to the <a href="#"> Terms of services. </a></label>
	<p>Already have an account?<a href="login.php"> Login</a></p> 
	<input type="submit" name="btnRegister" value="Register" onclick="Validate()" >
	<input type="reset" name="btnReset" value="Clear">
</body>
</html>
