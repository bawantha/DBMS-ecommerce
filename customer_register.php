<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
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
					   You friendly neighborhood Online Shop
					</p>
				</div>
			</div>

            <!-- ITEMS-->

            <div class="row">
			<div class="box">
             <form action="/action_page.php" style="border:1px solid #ccc"> <!--add POST Action -->
			  <div class="container">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>

				<label for="email"><b>Email</b></label><br>
				<input type="email" placeholder="Enter Email" name="email" required><br>
				
				<label for="name"><b>Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" required><br>
				
				<label for="address"><b>Address</b></label><br>
				<input type="text" placeholder="Enter Address" name="address" required><br>
				
				<label for="telephone"><b>Contact Number</b></label><br>
				<input type="telephone" placeholder="Enter Contact Number" name="telephone" required><br>

				<label for="psw"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="psw" required><br>

				<label for="psw-repeat"><b>Repeat Password</b></label><br>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
				
				
				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				<div class="clearfix">
				  <button type="submit" class="signupbtn">Sign Up</button>
				</div>
			  </div>
			</form>  
			</div>
            </div>
        </div>
    </div>
</div>
</html>