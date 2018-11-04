<!DOCTYPE html>
<html lang="en">
<head>
    <title>BDMS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


<!--HEADLINE    -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
                Wellcome : Guest
            </a>

        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_regsiter.php">Register</a>
                </li>
                <li><a href="checkout.php">My Account</a>
                </li>
                <li><a href="cart.php">Go to Cart</a></li>
                <li><a href="checkout.php">Login</a></li>

            </ul>
        </div>
    </div>


</div>

<!--SIDE BAR FOR CATEGORIES-->
<div id="content">
    <div class="container">
        <div class="col-md-3">
            <?php include "includes/sidebar.php" ?>
        </div>
        <div class="col-md-9">
<!--        WELCOME STRIP-->
            <div class="box">
                <h1>Welcome </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mollis lacus. Vestibulum sed efficitur urna. Ut eleifend, nulla sit amet accumsan aliquam, ante arcu interdum dui, a mattis purus quam dapibus justo. Integer dui magna, porttitor a eros id, condimentum pharetra diam. Duis pretium tristique sapien, nec egestas ero
                </p>
            </div>

            <!-- ITEMS-->

            <div class="row">
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="details.php">
                            <img src="images/electronic.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Electronic</a></h3>
                            <p class="price">$50</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to cart</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="details.php">
                            <img src="images/toy.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Toy</a></h3>
                            <p class="price">$50</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to cart</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="details.php">
                            <img src="images/electronic.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Electronic</a></h3>
                            <p class="price">$50</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to cart</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md4 col-md-6 center-responsive">
                    <div class="product">
                        <a href="details.php">
                            <img src="images/toy.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Toy</a></h3>
                            <p class="price">$50</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to cart</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


</html>