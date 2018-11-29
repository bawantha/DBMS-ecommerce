<?php
$db_server='localhost';
$db_user='shop_user';
$db_password='shoppassword';
$db_name='c_online';
$db=mysqli_connect($db_server,$db_user,$db_password,$db_name);

function begin(){
    mysqli_query($GLOBALS['db'],  "BEGIN");
}

function commit(){
    mysqli_query($GLOBALS['db'], "COMMIT");
}

function rollback(){
    mysqli_query($GLOBALS['db'], "ROLLBACK");
}

?>