<?php
	include('database.controller.php');
   session_start();

   if(isset($_SESSION['user_id'])){
		 header("location:index.php");
	}

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form

      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = md5(mysqli_real_escape_string($db,$_POST['password']));

      $sql = "SELECT customer_id FROM customer_registered WHERE email = '$email' AND password = '$password' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $email and $password, table row must be 1 row

      if($count == 1) {
	  $_SESSION['user_id'] = $row['customer_id'];
		 header("location: index.php");
			}
      else {
         $_SESSION['error'] = "Your email or Password is invalid";
		 header("location: status.php?pop=yes");
      }
   }
?>