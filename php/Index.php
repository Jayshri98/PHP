<!DOCTYPE html>
<html>
<head>
	<title>Registarion</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<style>
		.banner
  		{	
  			width: 100%;
  			height: 150vh;
  			background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(photo-1524010246915-297e8bb735e6.jpg);
  			background-size: cover;
  			background-position: center;
  			color: white;
  		}
  		.navbar
		{
			width: 100%;
			padding-left: 8%;
			padding-right: 8%;
			padding-bottom: 5%;
			box-sizing: border-box;
			overflow: hidden;
		}

		nav
		{
			padding-top: 20%;
			text-align: right;
		}
		nav ul li
		{
			list-style: none;
			display: flex;
			padding-top: 10%;
			margin-right: 10px;
		}
		.navbar
		{
			background-color: rgba(0,0,0,.2);
		}
  		.login-box
		{
			width: 500px;
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: white;
			/*text-align: center;*/
			z-index: 999;
			padding: 60px 32px;
			background: rgba(255,255,255,0.04);
			box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
			font-family: Georgia; 
			margin-top:10%;

		}
		h1
		{
			float: left;
			text-align: center;
			font-size: 40px;
			border-bottom: 6px solid white;
			margin-bottom: 50px;
			padding: 13px 0;
		}
		.input_field
		{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 1px solid white;
		}
		input
		{
			border: none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.form
		{
			width: 100%
		}
		.input_field
		{
			margin-bottom: 15px;
			display: flex;
		}
		.login-box .form .input_field .label
		
		{
			width: 200px;
			padding: 8px;
			transition: all 0.3s ease;
		}
		.login-box .form .input_field textarea
		{
			resize: none;
			height: 125px;
		}
		.btn
			{
				font-family: Arial, Helvetica, sans-serif;
			  	font-size: 16px;
			  	margin: 25px;	
			  	cursor: pointer;
			}
			#button
			{
				border-radius: 25px;
				color: white;
				padding: 10px;
			}
		button
		{
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #009688;
			background: transparent;;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			margin-left: 120px;
		}
		button:hover span
		{
			width: 100%;
		}
		button:hover
		{
			border: none;
		}
		.bbb
		{
			background: #009688;
			height: 100%;
			width: 0;
			border-radius: 25px;
			position: absolute;;
			left: 0;
			bottom: 0;
			z-index: -1;
			transition: 0.5s;
		}
		.radio
		{
			float: left;
			text-align: center;
			font-size: 40px;
			margin-left: -140px;
			margin-right: -150px;
		}
		.error
		{
			color: #FF0001; 
		}
		@media (max-width: 500px)
			{	.banner
				{
					width: 100%;
				}
				.navbar
				{	
					background-color:#1C2331
				}
				.login-box
				{
					display: block;
					width: 100%;
					margin-bottom: 40px;
					margin-top: 20%;
					margin-right: 20%;
					/*margin-left: 5%;*/
				}
				.login-box .form .input_field
				{
					flex-direction: column;
					align-items: flex-start; 
				}
				.login-box .form .input_field .label
				{
					margin-bottom: 5px;
				}
				.login-box .form .input_field .radio
				{
					margin-left: 20%;
				}
				.button
				{
					text-align: center;
					margin-left: 40px;
				}

			}
	</style>

</head>
<body>


	<?php 

		$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = "";  
			$name = $mail = $mobileno = $gender = $website = "";

		if (isset($_POST['submit'])) 
		{
			$name = $_POST["name"];
			$mail = $_POST["email"];
			$mob = $_POST["mobileno"];
			$site = $_POST["website"];

			echo "Your name is: ".$name;
			echo "<br>";
			echo "Your email is ".$mail;
			echo "<br>";
			echo "Your Contact number is: ".$mob;
			echo "<br>";
			echo "Your website is: ".$site;
			echo "<br>";

			if (strlen($name) <=20) 
			{
				echo "Name should be less than 20 characters";
			}
		}
		else
		{



	?>

	<div class="banner">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="padding-top: 1px;">	
			
			<!----------------------------------->
			<div class="container">		
	      		<a class="navbar-brand" href="#">  
	      		</a><br>
   			 </div>
      		<!-- Collapse -->
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	    </button>
    	<div class="collapse navbar-collapse" id="navbar">
	    	<ul class="navbar-nav mr-auto">
	        	<li class="nav-item active">
	            	<a class="nav-link" href="#">
	            		<strong>Home</strong>
	              	<span class="sr-only">(current)</span>
	            	</a>
	          	</li>

	           		<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white">
					        Services
					      </a>
					      <div class="dropdown-menu">
					        <a class="dropdown-item" href="#">Car rental services</a>
					        <a class="dropdown-item" href="#">Catering services</a>
					        <a class="dropdown-item" href="#">Courier services</a>
					      </div>
					</li>

	          	<li class="nav-item">
	            	<a class="nav-link" href="#" target="_self">
	            		<strong>Gallery</strong>
	            	</a>
	        	</li>

	          	<li class="nav-item">
	            	<a class="nav-link" href="#" target="_self">
	            		<strong>Blog</strong>
	            	</a>
	          	</li>

	          	<li class="nav-item">
	            	<a class="nav-link" href="#">
	            		<strong>ContactUs</strong>
	            	</a>
	          	</li>
	        </ul>
	    </div>
	</nav>

	<!----------------------------------------->


		<div class="login-box">
			<h1>Registration</h1>
			<form action="Index.php" method="post">
				<div class="user-details">
					<!----------Input group-------->
					<div class="input_field">
						<i class="fas fa-user"></i>
						<input type="text" name="name" placeholder="Enter your name "><br>
						<span class="error"> <?php echo $nameErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="text" name="email" placeholder="Enter your Mail "><br>
						<span class="error"> <?php echo $emailErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="mobileno" placeholder="Enter your Mobile number "><br>
						<span class="error"> <?php echo $mobilenoErr; ?> </span>
					</div>

					<div class="input_field">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<input type="text" name="website" placeholder="Enter your Website "><br>
						<span class="error"> <?php echo $websiteErr; ?> </span>
					</div>

					<label><strong>Gender</strong></label><br><br>
						<input type="radio" class="radio" name="gender" value="male">Male<br>
						<input type="radio" class="radio" name="gender" value="female">Female<br>
					<br><br>

						
					<button id="trans" value="required" class="button" name="submit" onclick="return validateForm()"><span class="bbb"></span>SUBMIT</button></a><br>
					</div>
			</form>
		</div>
	</div>


	<?php
		}
	?>

</body>
</html>