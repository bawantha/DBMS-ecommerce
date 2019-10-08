<!DOCTYPE html>
<html lang="en">
<?php include('controllers/payments.controller.php'); 
if(!isset($_SESSION['order_id'])){ //if no order created
	header("Location: index.php");
	die();

}

?>
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
					<h1>Payments</h1>
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
				

				<label for="cardname"><b>Name on Card</b></label><br>
				<input type="text" placeholder="Enter Name on Card" name="cardname" required><br>

				<label for="name"><b>Credit Card Number</b></label><br>
				<input type="text" placeholder="Enter Card Number" name="cardnumber" required pattern="[0-9]{16,19}" max-length="19" autocomplete="off" ><br>

				<label for="name"><b>Exp Date</b></label><br>
				<input type="text" placeholder="Enter Expiration Date" name="expdate" required min="<?php echo date("Y-m",strtotime("today")); ?>" max="<?php echo date("Y-m",strtotime("+5 years")); ?>"><br>

				<label for="cvv"><b>CVV</b></label><br>
				<input type="text" placeholder="Enter CVV" name="cvv" required pattern="\d{3}" autocomplete="off"><br>
				

				<div class="clearfix">
				  <button type="submit" class="signupbtn" name="cardpayments">Pay by Card</button>
				  
				</div>
				
			  </div>
			</form>

				<form style="border:1px solid #ccc" method='POST'> <!--add POST Action -->
					<button type="submit" class="signupbtn" name="cashpayments">Pay by Cash</button>
				</form>

			</div>
            </div>
        </div>
    </div>
</div>
</html>