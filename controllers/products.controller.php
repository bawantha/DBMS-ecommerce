<?php
include('database.controller.php');
$subcat_id=$_GET['subcat'];
$sql="SELECT product_name,calculated_price,sku_id FROM sku_full WHERE subcat_id='$subcat_id' GROUP BY sku_id;";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_assoc($result)){
	$sku_array[]=$row;
 }

foreach($sku_array as $sku){
	$product_name=$sku['product_name'];

	$product_description=$sku["description"];
	$sku_id=$sku['sku_id'];
	echo "<li><a href=\"view.php?sku=$sku_id&name=$product_name&details=$product_description\">$product_name</a></li>";

}
?>