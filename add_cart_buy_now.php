<?php include('controllers/add_cart_buy_now.controller.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm Quantity</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<form action="add_cart_buy_now.php" method="post">
<!--HEADLINE    -->
<?php include "includes/header.php" ?>

<div id="content">
    <div class="container">
        <?php include "includes/sidebar.php" ?>
        <div class="col-md-9">
<!--        WELCOME STRIP-->
			<div class="row">
				<div class="box">
					<h1></h1>
					<h4>
							Product Details
					</h4>
                    <p><?php echo $_GET['details'] ?></p>
                    

				</div>
			</div>

            <!-- ITEMS-->

            <div class="row">
			<div class="box">
               <p><?php //include "controllers/add_cart_buy_now.controller.php" 
                echo $_GET['value']?></p>
                <h3>Price: Rs <?php echo $price?></h3>
                <h4> Enter desired quantity here</h4>
                
                <p>Quantity: <input type="number" value="1" min="1" name="quantity" style="width: 50px" /> </p>
                
                <p><input type="submit" name="add" value="Add To Cart" style="background-color:#8a00e6;color:white" > <a href="#" class="btn button3">Buy Now</a></p>
          
			</div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>