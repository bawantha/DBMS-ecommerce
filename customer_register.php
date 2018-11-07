<!DOCTYPE html>
<html lang="en">
<?php include('controllers/register.controller.php'); ?>
<head>
    <title>Register</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


<!--HEADLINE    -->
<?php include "includes/header.php" ?>

<!--SIDE BAR FOR CATEGORIES-->
<div id="content">
    <div class="container">
            <?php include "includes/sidebar.php" ?>
		
        <div class="col-md-9">
<!--        WELCOME STRIP-->
			<div class="row">
				<div class="box">
					<h1>Register New Customer</h1>
					<p>
                    <a href="login.php" class="btn btn-success btn-sm">Click here to LOGIN.</a>
					</p>
				</div>
			</div>

            <!-- ITEMS-->

            <div class="row">
			<div class="box">
             <form style="border:1px solid #ccc" method='POST'> <!--add POST Action -->
			  <div class="container">
				<br>
				<label for="email"><b>Email</b></label><br>
				<input type="email" placeholder="Enter Email" name="email" required><br>
				
				<label for="name"><b>Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" required><br>
				
				<label for="address"><b>Address</b></label><br>
				<input type="text" placeholder="Enter Address" name="address" required><br>
				
				<label for="telephone"><b>Contact Number</b></label><br>
				<input type="telephone" placeholder="Enter Contact Number" name="telephone" required><br>

				<label for="password"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" required><br>

				<label for="psw-repeat"><b>Repeat Password</b></label><br>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
				
				
				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				<div class="clearfix">
				  <button type="submit" class="signupbtn" name="register">Sign Up</button>
				</div>
			  </div>
			</form>  
			</div>
            </div>
        </div>
    </div>
</div>
</html>