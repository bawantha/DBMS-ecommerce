<?php
$conn=mysqli_connect('localhost','root','','c_online');
$sql="SELECT * FROM subcategory s JOIN category c ON s.cat_id=c.cat_id WHERE c.cat_name='toys';";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	$subcat_array[]=$row;
 }
foreach($subcat_array as $subcat){
	$subcat_name=$subcat['subcat_name'];
	echo "<li><a href=\"#\">$subcat_name</a></li>";
}
?>