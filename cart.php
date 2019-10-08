
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
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
					<h1>Cart</h1>
					<p>
                        <?php echo $_POST['quantity'];?>
					</p>
				</div>
			</div>

            <!-- ITEMS-->
            <div class="row">
			<div class="box">
               <?php include "controllers/cart.controller.php" ?>
			</div>
            </div>
        </div>
    </div>
</div>
</html>
=======
<?php
session_start();
include('controllers/database.controller.php');
if(!isset($_SESSION['session_id']) && isset($_SESSION['order_id']) ){
    header("Location: payments.php");
	die();
}
if(!isset($_SESSION['session_id'])){
		 $create_cart_query=mysqli_query($db,"INSERT INTO cart (price) VALUES ('0');");
		 $cart_id=mysqli_insert_id($db);
		 $_SESSION['session_id']=$cart_id;
    }
    
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>C Online </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <link href="styles/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>
<!--HEADLINE    -->
<?php include "includes/header.php" ?>
<body>

<div class="container">
        <?php include "includes/sidebar.php" ?>
        <div class="col-md-9">
<div class="col-md-9" id="cart" ><!-- col-md-9 Starts -->

    <div class="box" ><!-- box Starts -->

        <form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->

            <h1> Shopping Cart </h1>

            <?php
            if(isset($_SESSION['session_id'])){
                $_session_id=$_SESSION['session_id'];
                $select_cart ="SELECT * FROM `cart_details` WHERE `session_id`='$_session_id'";
                $run_cart = mysqli_query($db,$select_cart);
                $count = mysqli_num_rows($run_cart);

            }
            ?>

            <p class="text-muted" > You currently have <?php echo $count; ?> item(s) in your cart. </p>

            <div class="table-responsive" ><!-- table-responsive Starts -->

                <table class="table" ><!-- table Starts -->

                    <thead><!-- thead Starts -->

                    <tr>

                        <th  >Product</th>

                        <th>Quantity</th>

                        <th>Unit Price</th>

                        <th >Delete</th>

                        <th > Sub Total </th>


                    </tr>

                    </thead><!-- thead Ends -->

                    <tbody><!-- tbody Starts -->

                    <?php

                    $total = 0;

                    while($row_cart = mysqli_fetch_array($run_cart)){

                        $sku_id = $row_cart['sku_id'];

                        $quantity= $row_cart['quantity'];

                        $get_products = "SELECT  * FROM  product NATURAL  JOIN sku where sku_id='$sku_id'";

                        $run_products = mysqli_query($db,$get_products);

                        while($row_products = mysqli_fetch_array($run_products)){

                            $product_title = $row_products['product_name'];


                            $only_price = $row_products['base_price'];

                            $sub_total = $row_products['calculated_price']*$quantity;

                            $total += $sub_total;

                            ?>

                            <tr>


                                <td>
                                    <a href="#" > <?php echo $product_title; ?> </a>

                                </td>

                                <td>
                                    <?php echo $quantity; ?>
                                </td>
                                <td>

                                    <?php echo $only_price; ?>

                                </td>


                                <td>
                                    <input type="checkbox" name="remove[]" value="<?php echo $sku_id; ?>" >
                                </td>

                                <td>
                                        <?php echo $sub_total?>
                                </td>


                            </tr>

                        <?php } } ?>

                    </tbody><!-- tbody Ends -->

                    <tfoot><!-- tfoot Starts -->

                    <tr>

                        <th colspan="5"> Total </th>

                        <th colspan="2"> <?php echo $total; ?></th>

                    </tr>

                    </tfoot><!-- tfoot Ends -->

                </table><!-- table Ends -->


            </div><!-- table-responsive Ends -->


            <div class="box-footer"><!-- box-footer Starts -->

                <div class="pull-left"><!-- pull-left Starts -->

                    <a href="index.php" class="btn btn-default">

                        <i class="fa fa-chevron-left"></i> Continue Shopping

                    </a>

                </div><!-- pull-left Ends -->

                <div class="pull-right"><!-- pull-right Starts -->

                    <button class="btn btn-default" type="submit" name="update" value="Update Cart">

                        <i class="fa fa-refresh"></i> Update Cart

                    </button>

                    <a href="checkout.php" class="btn btn-primary">

                        Proceed to checkout <i class="fa fa-chevron-right"></i>

                    </a>

                </div><!-- pull-right Ends -->

            </div><!-- box-footer Ends -->

        </form><!-- form Ends -->


    </div><!-- box Ends -->

    <?php

    function update_cart(){

        global $db;

        if(isset($_POST['update'])){

            foreach($_POST['remove'] as $remove_id){


                $delete_product = "delete from cart_details where sku_id='$remove_id'";

                $run_delete = mysqli_query($db,$delete_product);

                if($run_delete){
                    echo "<script>window.open('cart.php','_self')</script>";
                }



            }




        }



    }

    echo @$up_cart = update_cart();



    ?>





</div></div><!-- col-md-9 Ends -->
