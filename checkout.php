<!DOCTYPE html>
<html lang="en">
<?php include('controllers/checkout.controller.php'); 
if(!isset($_SESSION['user_id'])){ //if not-registered user redirect to guest-payments page
	header("Location: guest_checkout.php");
	die();
}

?>
<head>
    <title>Checkout</title>
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
					<h1>Checkout</h1>
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

				<label for="delivery"><b>Delivery Location</b></label><br>
				<input type="text" placeholder="Enter Delivery Location" name="delivery" required><br>
				

				<div class="clearfix">
				  <button type="submit" class="signupbtn" name="checkout">Checkout</button>
				</div>
			  </div>
			</form>  
			</div>
            </div>
        </div>
    </div>
</div>
</html>