<?php

session_start();

$con = mysqli_connect("localhost","root","","c_online");

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {




    ?>

    <?php

    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins  where admin_email='$admin_session'";

    $run_admin = mysqli_query($con,$get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];



    $get_products = "select * from product";
    $run_products = mysqli_query($con,$get_products);
    $count_products = mysqli_num_rows($run_products);

    $get_customers = "select * from customer_registered";
    $run_customers = mysqli_query($con,$get_customers);
    $count_customers = mysqli_num_rows($run_customers);

    $get_p_categories = "select * from category";
    $run_p_categories = mysqli_query($con,$get_p_categories);
    $count_p_categories = mysqli_num_rows($run_p_categories);


    $get_pending_orders = "select * from order_c";
    $run_pending_orders = mysqli_query($con,$get_pending_orders);
    $count_pending_orders = mysqli_num_rows($run_pending_orders);


    ?>


    <!DOCTYPE html>
    <html>

    <head>

        <title>Admin Panel</title>

        <link href="../styles/bootstrap.min.css" rel="stylesheet">

        <link href="../styles/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    </head>

    <body>

    <div id="wrapper"><!-- wrapper Starts -->

        <?php include("includes/sidebar.php");  ?>

        <div id="page-wrapper"><!-- page-wrapper Starts -->

            <div class="container-fluid"><!-- container-fluid Starts -->

                <?php

                if(isset($_GET['dashboard'])){

                    include("dashboard.php");

                }

                if(isset($_GET['insert_product'])){

                    include("insert_product.php");

                }

                if(isset($_GET['view_products'])){

                    include("view_products.php");

                }

                if(isset($_GET['delete_product'])){

                    include("delete_product.php");

                }

                if(isset($_GET['edit_product'])){

                    include("edit_product.php");

                }

                if(isset($_GET['insert_p_cat'])){

                    include("insert_p_cat.php");

                }

                if(isset($_GET['view_p_cats'])){

                    include("view_p_cats.php");

                }

                if(isset($_GET['delete_p_cat'])){

                    include("delete_p_cat.php");

                }

                if(isset($_GET['edit_p_cat'])){

                    include("edit_p_cat.php");

                }

                if(isset($_GET['insert_cat'])){

                    include("insert_cat.php");

                }

                if(isset($_GET['view_cats'])){

                    include("view_cats.php");

                }

                if(isset($_GET['delete_cat'])){

                    include("delete_cat.php");

                }

                if(isset($_GET['edit_cat'])){

                    include("edit_cat.php");

                }



                if(isset($_GET['view_customers'])){

                    include("view_customers.php");

                }

                if(isset($_GET['customer_delete'])){

                    include("customer_delete.php");

                }


                if(isset($_GET['view_orders'])){

                    include("view_orders.php");

                }

                if(isset($_GET['order_delete'])){

                    include("order_delete.php");

                }


                if(isset($_GET['view_payments'])){

                    include("view_payments.php");

                }

                if(isset($_GET['payment_delete'])){

                    include("payment_delete.php");

                }

                if(isset($_GET['insert_user'])){

                    include("insert_user.php");

                }

                if(isset($_GET['view_users'])){

                    include("view_users.php");

                }


                if(isset($_GET['user_delete'])){

                    include("user_delete.php");

                }



                if(isset($_GET['user_profile'])){

                    include("user_profile.php");

                }



                ?>

            </div><!-- container-fluid Ends -->

        </div><!-- page-wrapper Ends -->

    </div><!-- wrapper Ends -->

    <script src="../js/jquery.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>


    </body>


    </html>

<?php } ?>