<?php 
      include('controllers/database.controller.php');
	  $sku_id=$_GET['sku'];
	  $sql = "select * from sku_full WHERE  sku_id='$sku_id' ";
      $result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$detail_array[]=$row;
	 }

	foreach($detail_array as $detail){
		var_dump($detail);

		$price=$detail["base_price"];
		$product_name=$detail["product_name"];
		$product_description=$detail["description"];
		$detail_value=$detail['variant_type']." : ".$detail['variant_value'];

		echo "<li><a href=\"add_cart_buy_now.php?price=$price&name=$product_name&details=$product_description&value=$detail_value&sku=$sku_id\">$detail_value</li>";
}?>

