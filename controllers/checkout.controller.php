<?php 

include('database.controller.php');
session_start();

$session_id = $_SESSION['session_id'];

$customer_id = $_SESSION['user_id'];

$order_type = 'registered';


//Calculating the total price
$sql = "SELECT price FROM cart WHERE session_id = '$session_id' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$calculated_price = $row['price'];
    
if( isset($_POST['delivery']) && isset($_POST['checkout'])  ){
    $delivery_location = mysqli_real_escape_string($db,$_POST['delivery']);

    begin();
    $query1 = "INSERT INTO order_c (session_id, order_type, delivery_location, calculated_price)
    VALUES('$session_id','$order_type','$delivery_location', '$calculated_price') ";
    
    $var=mysqli_query($db, $query1);

    $order_id = mysqli_insert_id($db);
    $_SESSION['order_id'] = $order_id ;

    $query2 = "INSERT INTO registered_order (order_id, customer_id) VALUES ('$order_id', '$customer_id') ";
    $var2=mysqli_query($db, $query2);
    if ($var && $var2 ){
        commit();
        unset($_SESSION['session_id']);
        header('location: payments.php');
    }else{
        rollback();
        $_SESSION['error'] = 'Error!';
        header('location: status.php');
    }
}


?>