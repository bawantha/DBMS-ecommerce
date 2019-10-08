<?php
   session_start();
	
   if(!	isset($_SESSION['session_id'])){
		 $create_cart_query=mysqli_query($db,"INSERT INTO cart (price) VALUES ('0');");
		 $cart_id=mysqli_insert_id($db);
		 $_SESSION['session_id']=$cart_id;
	}

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
	  $session_id=$_SESSION['session_id'];
      $sql = "INSERT INTO cart_details (session_id, sku_id, quantity) VALUES ('$session_id','$sku_id','$quantity')";
      $result = mysqli_query($db,$sql);
	  header('location:cart.php');
   }
?>