<?php

	$email="";
	$name="";
	$address="";
	$telephone="";
	$password="";
	$psw_repeat="";
	
	include('database.controller.php');

	if (isset($_POST['register'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$telephone=mysqli_real_escape_string($db,$_POST['telephone']);
		$password = md5(mysqli_real_escape_string($db, $_POST['password']));
		$psw_repeat=md5(mysqli_real_escape_string($db, $_POST['psw-repeat']));


		if ($password===$psw_repeat){
			//$var=mysqli_query($db, $query);
			session_start();
			/* create a prepared statement */
			$stmt = mysqli_stmt_init($db);
			if (mysqli_stmt_prepare( $stmt, 'INSERT INTO customer_registered (email, name, contact_no,address,password)
			VALUES(?,?,?,?,?)' )) {

				/* bind parameters for markers */
				mysqli_stmt_bind_param($stmt, "sssss", $email, $name, $telephone, $address, $password);

				/* execute query */
				$var = mysqli_stmt_execute($stmt);

				/* close statement */
				mysqli_stmt_close($stmt);
			}

			/* close connection */
			mysqli_close($db);
			if($var){
				$_SESSION['error']="You have successfully registered";
				header("location: status.php?pop=yes");	
			}else{
				$_SESSION['error']="There was an error in your registration. Please use an unique email for registration";
				header("location: status.php?pop=yes");	
			}
		}else{
			session_start();
			$_SESSION['error']="Passwords do not match";
			header("location: status.php?pop=yes");	
		}
		}
?>