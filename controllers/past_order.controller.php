<?php
include('controllers/database.controller.php');
session_start();
 if(!isset($_SESSION['user_id'])){
		 header("location:index.php");
	}
$session_id=$_GET['session_id'];
$orders_query="select session_id,product_name,quantity,cart_details.sku_id from cart_details  join sku_full on cart_details.sku_id=sku_full.sku_id where cart_details.session_id='$session_id'";
$result=mysqli_query($db,$orders_query);
while($row = mysqli_fetch_assoc($result)){
	$orders_array[]=$row;
 }
foreach($orders_array as $order){
	$product_name=$order['product_name'];
	$quantity=$order['quantity'];
	$sku_id=$order['sku_id'];
	echo "<li><a href=\"view.php?sku=$sku_id&name=$product_name\">$product_name x $quantity</a></li>";
} 
