<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Registration Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Css -->
    <link rel="stylesheet" href="style.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				

				<img src="nobi.png" alt="" width="70%" style="transform: rotateY(180deg);position:relative;left:20%; " >
				<a href="login.php">
					<div class="form-left-last"> 
						<input type="submit" name="account" class="account" value="Have An Account">
					</div>
				</a>
				
			</div>
			<form class="form-detail" action="Signup.php" method="post" id="myform">
				<b><h3>SIGN UP</h3></b>
				<div class="form-group">
					<div class="form-row form-row-1">
						<b><label for="first_name">First Name</label></b>
						<input type="text" name="first_name" id="first_name" class="input-text">
					</div>
					<div class="form-row form-row-1">
						<b><label for="last_name">Last Name</label></b>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<b>	<label for="your_email">Your Email</label></b>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<b><label for="password">Password</label></b>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<b><label for="comfirm-password">Confirm Password</label></b>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		// jQuery.validator.setDefaults(
		//   	debug: true,
		//   	success:  function(label){
        // 		label.attr('id', 'valid');
   		//  	
		// });
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body>
</html>

<?php
	require 'connect.inc.php';
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['your_email']) && isset($_POST['password']) && isset($_POST['comfirm_password']))
	{
		if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['your_email']) && !empty($_POST['password']) && !empty($_POST['comfirm_password']))
		{
			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$emailid = $_POST['your_email'];
			$password = md5($_POST['password']);
			$con_password = md5($_POST['comfirm_password']);
			$query = " SELECT mailid FROM users where mailid = '$emailid' ";
			if($query_run = mysqli_query( $con , $query))  
			{
				if(mysqli_num_rows($query_run) == NULL)
				{
					if($password == $con_password)
					{
						$query_signup = " INSERT INTO `users` VALUES('$fname','$lname','$emailid', '$password') ";
						if( $query_signup_run = mysqli_query( $con, $query_signup ) )
						{
							echo "<h1 align=\"center\" style ='position: absolute;top: 0%;' ><font color=\"lime\">You have successfully registered - ".$lname."!</h1><br>";
						}
						else
						{
							echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* Can't perform the operation now.Please try again later.</font></h3>";
						}
					}
			
					else
					{
						echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* You entered different passwords.</font></h3>";
					}
				}
				else
				{
					echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* This Userid is already registered.Please either go to Log-in page or try again with a different Userid.</font></h3>";
				}
			}
			else
			{
				echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* Can't perform the operation now.Please try again later.</font></h3>";
			}
		}
		else
		{
			echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* Please Fill In All Spaces.</font></h3>";
		}
	}
?>



