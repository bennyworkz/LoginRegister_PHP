<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Login Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Css -->
    <!-- <link rel="stylesheet" href="style.css"/> -->

    <style>
        body {
            margin:  0;
            background-image: url('ocean.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .page-content {
            width: 100%;
            margin:  0 auto;
            /* background: #75e2e9; */
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
        }
        .form-v4-content  {
            /* background: #fff; */
            background-color: rgba(29, 146, 150, 0.219);
            width: 850px;
            border-radius: 10px;
            -o-border-radius: 10px;
            -ms-border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            box-shadow: 1vmin 1vmin 1vmin black;
            /* box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15); */
            margin: 70px 0;
            position: relative;
            display: flex;
            display: -webkit-flex;
            font-family: 'Open Sans', sans-serif;
        }
        .form-v4-content h3 {
            font-weight: 700;
            font-size: 30px;
            padding: 6px 0 0;
            margin-bottom: 34px;
        }
        .form-v4-content .form-left {
            /* background: #3786bd; */
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            padding: 20px 40px;
            position: relative;
            width: 100%;
            color: #fff;
        }
        .form-v4-content .form-left p {
            font-size: 15px;
            font-weight: 300;
            line-height: 1.5;
        }
        .form-v4-content .form-left span {
            font-weight: 700;
        }
        .form-v4-content .form-left .text-2 {
            margin: 20px 0 25px;
        }
        .form-v4-content .form-left .account {
            background: #fff;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 180px;
            border: none;
            margin: 15px 0 50px 0px;
            cursor: pointer;
            color: #333;
            font-weight: 700;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
        }
        .form-v4-content .form-left .account:hover {
             background: #e5e5e5; 
             
        }
        .form-v4-content .form-left .form-left-last input {
            padding: 15px;
        }
        .form-v4-content .form-detail {
            padding: 20px 40px;
            position: relative;
            width: 100%;
        }
        .form-v4-content .form-detail h3 {
            /* color: #3786bd; */
            /* color: white; */
            color: aqua;
            font-weight: bolder;
        }
        .form-v4-content .form-detail .form-group {
            display: flex;
            display: -webkit-flex;
            margin:  0 -8px;
        }
        .form-v4-content .form-detail .form-row {
            width: 100%;
            position: relative;
        }
        .form-v4-content .form-detail .form-group .form-row.form-row-1 {
            width: 100%;
            padding: 0 8px;
             
        }
        .form-v4-content .form-detail label {
            font-weight: bolder;
            font-size: 15px;
            /* color: #666; */
            /* color: rgb(4, 230, 246); */
            color: whitesmoke;
        
            display: block;
            margin-bottom: 8px;
        }
        .form-v4-content .form-detail .form-row label#valid {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            width: 14px;
            height: 14px;
            border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            /* background: #53c83c; */
            background: rgb(69, 246, 4);
        
        }
        .form-v4-content .form-detail .form-row label#valid::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 3px;
            height: 8px;
            border: 1px solid #fff;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .form-v4-content .form-detail .form-row label.error {
            padding-left: 0;
            margin-left: 0;
            display: block;
            position: absolute;
            bottom: -5px;
            width: 100%;
            background: none;
            color: red;
        }
        .form-v4-content .form-detail .form-row label.error::after {
            content: "\f343";
            font-family: "LineAwesome";
            position: absolute;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            right: 10px;
            top: -31px;
            color: red;
            font-size: 18px;
            font-weight: 900;
        }
        .form-v4-content .form-detail .input-text {
            margin-bottom: 27px;
            background-color:  #4385b596;
            color: #fff;
        }
        .form-v4-content .form-detail input {
            width: 100%;
            padding: 11.5px 15px;
            border: 1px solid #e5e5e5;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
            color: #333;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
        }
        .form-v4-content .form-detail .form-row input:focus {
            border: 1px solid rgb(69, 246, 4);
        }
        .form-v4-content .form-detail .form-checkbox {
            margin-top: 1px;
            position: relative;
        }
        .form-v4-content .form-detail .form-checkbox input {
            position: absolute;
            opacity: 0;
        }
        .form-v4-content .form-detail .form-checkbox .checkmark {
            position: absolute;
            top: 13px;
            left: 0;
            height: 15px;
            width: 15px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .form-v4-content .form-detail .form-checkbox .checkmark::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 3px;
            height: 8px;
            border: 1px solid #3786bd;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
            display: none;
        }
        .form-v4-content .form-detail .form-checkbox input:checked ~ .checkmark::after {
            display: block;
        }
        .form-v4-content .form-detail .form-checkbox p {
            margin-left: 34px;
            color: #333;
            font-size: 14px;
            font-weight: 600;
        }
        .form-v4-content .form-detail .form-checkbox .text {
            font-weight: 700;
            /* color: #3786bd; */
            color: azure;
            text-decoration: underline;
        }
        .form-v4-content .form-detail .register {
            background: #3786bd;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 130px;
            border: none;
            margin: 6px 0 50px 0px;
            cursor: pointer;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
        }
        .form-v4-content .form-detail .register:hover {
            background: #2f73a3;
        }
        .form-v4-content .form-detail .form-row-last input {
            padding: 12.5px;
        }
        
        /* Responsive */
        @media screen and (max-width: 691px) {
            .form-v4-content {
                margin: 180px 20px;
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .form-v4-content .form-left {
                width: auto;
                border-top-right-radius: 10px;
                border-bottom-left-radius: 0;
            }
            .form-v4-content .form-detail {
                padding: 30px 20px 30px 20px;
                width: auto;
            }
        }
        @media screen and (max-width: 575px) {
            .form-v4-content 
            {
                margin: 10% 5%;
                
            }
            .form-v4-content .form-detail .form-group {
                flex-direction: column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
                margin: 0;
            }
            .form-v4-content .form-detail .form-group .form-row.form-row-1 {
                width: 100%;
                padding:  0;
                
            }
        }
         
    </style>

</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				

				<img src="doraemon.png" alt="" width="70%" style="transform: rotateY(180deg);position:relative;left:20%;top:20%;" >
				<a href="signup.php"  target="_parent" rel="noopener noreferrer">
                    <div class="form-left-last" style="position:relative;top:20%" > 
                        <input type="submit"  name="account" class="account" value="SIGN UP">
                    </div>
                </div>
                </a>
			<form class="form-detail" action="login.php" method="post" id="myform">
				<b><h3>SIGN IN</h3></b>
				<div class="form-group">
					<!-- <div class="form-row form-row-1">
						<b><label for="first_name">First Name</label></b>
						<input type="text" name="first_name" id="first_name" class="input-text">
					</div>
					<div class="form-row form-row-1">
						<b><label for="last_name">Last Name</label></b>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div> -->
				</div>
				<div class="form-row">
					<b>	<label for="your_email">Your Email</label></b>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<b><label for="password">Password</label></b>
						<input type="password" name="password" id="password"  class="input-text" required>
					</div>
					<!-- <div class="form-row form-row-1"> 
						<b><label for="comfirm-password">Comfirm Password</label></b> 
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div> -->
				</div>
				<div class="form-checkbox">
					<label class="container"><p><a href="forget.php" class="text" style="text-decoration:none;" >Forgot Password ?</a></p>
					  	<!-- <input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span> -->
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="SIGN IN">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		<!-- // just for the demos, avoids form submit
		// jQuery.validator.setDefaults({
		//   	debug: true,
		//   	success:  function(label){
        // 		label.attr('id', 'valid');
   		//  	},
		// }); -->
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
	if(isset($_POST['your_email']) && isset($_POST['password']))
	{
		if(!empty($_POST['your_email']) && !empty($_POST['password']))
		{
			$userid = $_POST['your_email'];
			$password = md5($_POST['password']);
			$query = "SELECT * FROM users WHERE mailid ='$userid' AND password='$password' ";
			$result = mysqli_query($con,$query);
      		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      		$count = mysqli_num_rows($result);
      		if(mysqli_num_rows($result) != NULL)
      		{
      			ob_start();
				session_start();
				$_SESSION['your_email'] = $userid;
				//header('Location:search.php');
      			echo "<h1 align=\"center\" style ='position: absolute;top: 0%;' ><font color=\"lime\">You are loged-in successfully!</h1>";
                echo $result;
      		}
      		else
      		{
      			echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* Userid and password didn't match up.</font></h3>";
      		}
		} 
		else
		{
			echo "<font color=\"red\"><h3>* Please enter userid and password both.</h3></font>";
		}
	}
?>
