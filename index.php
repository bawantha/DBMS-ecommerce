<!DOCTYPE html>
<html lang="en">
<head>
    <title>C Online</title>
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
					<h1>Welcome to C Online</h1>
					<p>
					   You friendly neighborhood Online Shop
					</p>
				</div>
			</div>

            <!-- ITEMS-->

            <div class="row">
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="electronics.php">
                            <img src="images/electronic.jpg" class="img-responsive">
                        </a>
                        <div class="text" align=center>
                            <h3><a href="electronics.php">Electronics</a></h3>
                            <p class="buttons">
                                <a href="electronics.php" class="btn btn-primary"><i class="fa fa-shopping-cart">View Catalog</i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="toys.php">
                            <img src="images/toy.jpg" class="img-responsive">
                        </a>
                        <div class="text" align=center>
                            <h3><a href="toys.php">Toys</a></h3>
                            <p class="buttons">
                                <a href="toys.php" class="btn btn-primary"><i class="fa fa-shopping-cart">View Catalog</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>