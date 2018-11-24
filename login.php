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
<?php include "controllers/login.controller.php" ?>

<!--SIDE BAR FOR CATEGORIES-->
<div id="content">
    <div class="container">
            <?php include "includes/sidebar.php" ?>
		
        <div class="col-md-9">
<!--        WELCOME STRIP-->
			<div class="row">
				<div class="box">
					<h1>Customer Login</h1>
					<p>
                    <a href="customer_register.php" class="btn btn-success btn-sm">Click here to REGISTER.</a>
					</p>
				</div>
			</div>

            <!-- ITEMS-->

            <div class="row">
			<div class="box">
             <form style="border:1px solid #ccc" method='POST' > <!--add POST Action -->
			  <div class="container">
				
				<br>
				<label for="email"><b>Email</b></label><br>
				<input type="email" placeholder="Enter Email" name="email" required><br>

				<label for="password"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" required><br>
				
				<div class="clearfix">
				  <button type="submit" class="signupbtn">Login</button>
				</div>
			  </div>
			</form>  
			</div>
            </div>
        </div>
    </div>
</div>
</html>