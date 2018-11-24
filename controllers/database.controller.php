<?php
$db_server='localhost';
$db_user='root';
$db_password='';
$db_name='c_online';
$db=mysqli_connect($db_server,$db_user,$db_password,$db_name);

function begin(){
    mysql_query("BEGIN");
}

function commit(){
    mysql_query("COMMIT");
}

function rollback(){
    mysql_query("ROLLBACK");
}

?>