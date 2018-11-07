<!DOCTYPE html>
<html lang="en">
<head>
    <title>Status</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<?php include('includes/header.php'); ?>

<div class="body2" align=center>
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
            <div class="pad_left1">
              <h2><?php
							session_start();
							echo $_SESSION['error'] ; 
							$_SESSION['error']='';?></h2>
            </div>
			<div class="pad_top2"> <a href="javascript:history.go(-1)" class="button"><span><span>Go Back</span></span></a> </div>
      </div>
    </section>
    <!-- content -->
    <?php include('includes/footer.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
