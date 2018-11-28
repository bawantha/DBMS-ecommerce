<?php

include('database.controller.php');
session_start();

$order_id = $_SESSION['order_id'];
//$session_id = $_SESSION['session_id'];

$sql = "SELECT calculated_price FROM order_c WHERE order_id = '$order_id' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$amount  = $row['calculated_price'];

if( isset($_POST['cardpayments']) && isset($_POST['cardname']) && isset($_POST['cardnumber']) && isset($_POST['expdate']) && isset($_POST['cvv']) ){
    $paymentType = 'cc';

    begin();
    $query1 = "INSERT INTO payment (payment_type, order_id, amount)
    VALUES('$paymentType','$order_id','$amount') ";
    $var=mysqli_query($db, $query1);

    if ($var ){
        commit();
        header('location: payments.php');
    }else{
        rollback();
        $_SESSION['error'] = 'Error!';
        header('location: status.php');
    }
} elseif (isset($_POST['cashpayments'])){
    $paymentType = 'cash';

    begin();
    $query2 = "INSERT INTO payment (payment_type, order_id, amount)
    VALUES('$paymentType','$order_id','$amount') ";
    $var1=mysqli_query($db, $query2);

    if ($var1 ){
        commit();
        $_SESSION['error'] = 'Transaction successfull!';
        unset($_SESSION['order_id']);
        header('location: status.php');
        die();
    }else{
        rollback();
        $_SESSION['error'] = 'Error!';
        header('location: status.php');
    }
}


?>