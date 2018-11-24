<?php
include('database.controller.php');
$subcat_id=$_GET['subcat'];
$sql="SELECT * FROM sku NATURAL JOIN product WHERE subcat_id='$subcat_id';";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_assoc($result)){
	$sku_array[]=$row;
 }
foreach($sku_array as $sku){
	$product_name=$sku['product_name'];
	$sku_id=$sku['sku_id'];
	echo "<li><a href=\"view.php?sku=$sku_id&name=$product_name\">$product_name</a></li>";
}
?>