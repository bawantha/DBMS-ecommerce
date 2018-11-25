<?php
	include('database.controller.php');
	$sql="SELECT * FROM subcategory s JOIN category c ON s.cat_id=c.cat_id WHERE c.cat_name='toys';";
	$result=mysqli_query($db,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$subcat_array[]=$row;
	 }
	foreach($subcat_array as $subcat){
		$subcat_name=$subcat['subcat_name'];
		$subcat_id=$subcat['subcat_id'];
		echo "<li><a href=\"products.php?subcat=$subcat_id\">$subcat_name</a></li>";
	}
?>