<?php
include 'config.php';
session_start();
$user = $_SESSION['username'];
$log = $_SESSION['admin'];
if ($log != "log"){
	header ("Location: userlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- favicons -->	

	<title>docket : time scheduling app</title>
	<link rel="shortcut icon" href="images/timesch.jpg" type="image/x-icon">

<!-- meta-->	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="It is a time scheduling app for a specific organisation.">
	<meta name="author" content="vasundhra sharma,kshitiz gupta,sakshi sharma,rishabh kapoor,sanyam jain and pushpendra bansal">

<!-- stylesheet-->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/domain_style.css">

<!-- bootstrap-->	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- icons-->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- js scripts -->
	<script src="js/jquery.1.11.1.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/task.js"></script>

  		
</head>

<body>



<div class="header">
		<div class="container">
			<div class="col-md-3 title">
				<a href="domainhome.php">docket</a>
			</div>
			
			<div class="col-md-5"></div>
			<div class="col-md-4 noti">
			
				<div class="dropdown inline">
					  <button class="notibutton dropdown-toggle" type="button" data-toggle="dropdown">
					  <i class="fa fa-user fa-2x" aria-hidden="true"></i>
					   Hello <?php print strtoupper($user); ?>
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					    
					    <li><a href="domain_setting.php">Settings</a></li>
					      <li class="divider"></li>
					    <li><a href="logout.php">Log Out</a></li>
					  </ul>
					</div>
			</div>
		</div>
	</div>
