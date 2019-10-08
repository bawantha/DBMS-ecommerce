<?php 
session_start();
      include('controllers/database.controller.php');
      $price=$_GET['price'];
      $value=$_GET['value'];
      $sku=$_GET['sku'];
      $quantity="";


// initializing variables
 

// connect to the database


// REGISTER USER
if (isset($_POST['quantity'])) {
  // receive all input values from the form
  $quantity = $_POST['quantity'];
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  


    

  // Finally, register user if there are no errors in the form
  
  
  	$query = "INSERT INTO cart (session_i_d,start_time,price) VALUES (NULL, CURRENT_TIMESTAMP, $price)";
  	mysqli_query($db, $query);
  	header('location: index.php');
  
}

?>