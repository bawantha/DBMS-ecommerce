<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>
    <!DOCTYPE html>

    <html>

    <head>

        <title> Insert Products </title>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

    </head>

    <body>

    <div class="row"><!-- row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Products

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Products

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Title </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_title" class="form-control" required >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Category </label>

                            <div class="col-md-6" >

                                <select name="product_cat" class="form-control" >

                                    <option> Select  a  Product Category </option>


                                    <?php


                                    $get_p_cats = "select * from category";

                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                    while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {

                                        $p_cat_id = $row_p_cats['cat_id'];

                                        $p_cat_title = $row_p_cats['cat_name'];

                                        echo "<option value='$p_cat_id' >$p_cat_title</option>";

                                    }


                                    ?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Sub Category </label>

                            <div class="col-md-6" >


                                <select name="sub_cat" class="form-control" >

                                    <option> Select a Category </option>

                                    <?php

                                    $get_cat = "select * from subcategory ";

                                    $run_cat = mysqli_query($con,$get_cat);

                                    while ($row_cat=mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['subcat_id'];

                                        $cat_title = $row_cat['subcat_name'];

                                        echo "<option value='$cat_id'>$cat_title</option>";

                                    }

                                    ?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->

                      <!-- form-group Ends -->
                        <!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product  base Price </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_base_price" class="form-control" required >

                            </div>

                        </div>
                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Varient </label>

                            <div class="col-md-3" >

                                <select name="product_variant" class="form-control" >

                                    <option> Select a Category </option>

                                    <?php

                                    $get_cat = "select * from product_variant_type ";

                                    $run_cat = mysqli_query($con,$get_cat);

                                    while ($row_cat=mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['product_var_typ_id'];

                                        $cat_title = $row_cat['varient_type'];

                                        echo "<option value='$cat_id'>$cat_title</option>";

                                    }
                                    ?>

                                </select>

                            </div>

                            <div class="col-md-3" >

                                <input type="text" name="price_change" class="form-control" required >

                            </div>


                        </div>




                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Description </label>

                            <div class="col-md-6" >

                                <textarea name="product_desc" class="form-control" rows="6" cols="19" ></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" ></label>

                            <div class="col-md-6" >

                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




    </body>

    </html>

    <?php

    if(isset($_POST['submit'])){

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $sub_cat = $_POST['sub_cat'];
        $base_price = $_POST['product_base_price'];
        $product_desc = $_POST['product_desc'];
        $product_varient=$_POST['product_variant'];
        $price_change=$_POST['price_change'];





        $insert_product = "INSERT INTO `product` VALUES('$product_titler','$product_title','$product_desc','$base_price','$cat_id','$sub_cat') ";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){

            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?insert_product','_self')</script>";

        }

    }

    ?>

<?php } ?>
