<?php 
      include('controllers/database.controller.php');
	  $sku_id=$_GET['sku'];
	  $sql = "select * from sku_full WHERE  sku_id='$sku_id' ";
      $result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$detail_array[]=$row;
	 }
	 $description =$detail_array[0]['description'];
	 echo "<li>$description</li>";
	foreach($detail_array as $detail){
		$detail_value=$detail['variant_type']." : ".$detail['variant_value'];
		echo "<li>$detail_value</li>";
	}
	$sql2="SELECT calculated_price FROM sku WHERE sku_id='$sku_id'";
	$result2=mysqli_query($db,$sql2);
	$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	$price=$row2['calculated_price'];
	echo"</div><div class=\"box\">
					<h1>
							Rs. $price 
					</h1>";
?>
