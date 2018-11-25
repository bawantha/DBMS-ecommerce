<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_GET['name'] ?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


<!--HEADLINE    -->
<?php include "includes/header.php" ?>


<div id="content">
    <div class="container">
        <?php include "includes/sidebar.php" ?>
        <div class="col-md-9">
<!--        WELCOME STRIP-->
			<div class="row">
				<div class="box">
					<h1><?php echo $_GET['name'] ?></h1>
					<p>
							Product Details
					</p>
				</div>
			</div>

            <!-- ITEMS-->
            <div class="row">
					<div class="box">
						<?php include "controllers/view.controller.php" ?> 
						<?php include "controllers/addtocart.controller.php" ?> 
					
						<form style="border:1px solid #ccc" method='POST' > <!--add POST Action -->
						  <div class="container">
							<br>
							<label for="quantity"><b>Quantity</b></label><br>
							<input type="number" value="1" name="quantity" required><br>
							
							<div class="clearfix">
							  <button type="submit" class="signupbtn">Add to Cart</button>
							</div>
						  </div>
						</form>
					</div>
            </div>
        </div>
    </div>
</div>
</html>