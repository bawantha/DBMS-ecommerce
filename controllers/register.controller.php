<?php

	$email="";
	$name="";
	$address="";
	$telephone="";
	$password="";
	$psw_repeat="";
	
	$db = mysqli_connect('localhost', 'root', '', 'c_online');

	if (isset($_POST['register'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$telephone=mysqli_real_escape_string($db,$_POST['telephone']);
		$password = md5(mysqli_real_escape_string($db, $_POST['password']));
		$psw_repeat=md5(mysqli_real_escape_string($db, $_POST['psw-repeat']));
		
		$query = "INSERT INTO customer_registered (email, name, contact_no,address,password)
					  VALUES('$email','$name','$telephone','$address','$password')";
					  
		if ($password===$psw_repeat){
			$var=mysqli_query($db, $query);
			session_start();
			if($var){
				$_SESSION['error']="You have successfully submitted your application";
				header("location: status.php?pop=yes");	
			}else{
				$_SESSION['error']="There was an error in submitting your application. Please use an unique email for registration";
				header("location: status.php?pop=yes");	
			}
		}else{
			session_start();
			$_SESSION['error']="Passwords do not match";
			header("location: status.php?pop=yes");	
		}
		}
?>