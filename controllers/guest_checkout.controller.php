<?php 

include('database.controller.php');
session_start();

$session_id = $_SESSION['session_id'];

//$customer_id = $_SESSION['user_id'];

$order_type = 'guest';




//Calculating the total price
$sql = "SELECT price FROM cart WHERE session_id = '$session_id' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$calculated_price = $row['price'];
    
if( isset($_POST['delivery']) && isset($_POST['checkout']) ){
    $c_name = mysqli_real_escape_string($db,$_POST['name']);
    $delivery_location = mysqli_real_escape_string($db,$_POST['delivery']);
    $c_contact_no = mysqli_real_escape_string($db,$_POST['contact']);

    begin();
    $query1 = "INSERT INTO order_c (session_id, order_type, delivery_location, calculated_price)
    VALUES('$session_id','$order_type','$delivery_location', '$calculated_price') ";
    $var=mysqli_query($db, $query1);

    $order_id = mysqli_insert_id($db);
    $_SESSION['order_id'] = $order_id ;

    $query2 = "INSERT INTO guest_order (order_id, c_name, c_address, c_contact_no) VALUES ('$order_id', '$c_name', '$delivery_location', '$c_contact_no') ";
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