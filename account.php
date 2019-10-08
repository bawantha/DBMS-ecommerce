<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
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
					<h1>My Account</h1>
					<p>
							Past orders
					</p>
				</div>
			</div>

            <!-- ITEMS-->
            <div class="row">
			<div class="box">
               <?php include "controllers/account.controller.php" ?>
			</div>
            </div>
        </div>
    </div>
</div>
</html>