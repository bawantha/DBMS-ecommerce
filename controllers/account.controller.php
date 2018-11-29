<?php
include('controllers/database.controller.php');
session_start();
 if(!isset($_SESSION['user_id'])){
		 header("location:index.php");
	}
$customer_id=$_SESSION['user_id'];
$orders_query="select order_id,session_id,order_date,calculated_price from order_c natural join registered_order where customer_id='$customer_id'";
$result=mysqli_query($db,$orders_query);
while($row = mysqli_fetch_assoc($result)){
	$orders_array[]=$row;
 }
foreach($orders_array as $order){
	$order_date=$order['order_date'];
	$price=$order['calculated_price'];
	$session_id=$order['session_id'];
	echo "<li><a href=\"past_orders.php?session_id=$session_id\">$order_date - Rs. $price</a></li>";
} 
?>