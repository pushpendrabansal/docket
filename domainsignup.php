<?php


session_start();
if($_SESSION['admin']){
	mysql_close($db_handle);
	header("Location:domainhome.php");
	break;
}
else if($_SESSION['member']){
	mysql_close($db_handle);
	header ("Location: userhomepage.php");
	break;
}

else{

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

<!-- bootstrap-->	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- icons-->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- js scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		
</head>

<body>



<nav class="header">
  <div class="container">
    <div class="navbar-header title">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <img src="images/icon.png">
      </button>
      <a class="navbar-brand" href="index.php">docket</a>
    </div>
    <div class="collapse navbar-collapse menu" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="userlogin.php">Log In</a></li>
		
      </ul>

      
    </div>
  </div>
</nav>



<div class="main" style="padding-top: 100px ">
<div class="container">
	
	<div class="col-md-12 domain_form">
		
    	<div class="row ">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading middle" >
						<b>Succesfully 
						<br>
						
						You succesfully register
						<hr></b>
					</div>
					
				</div>
			</div>
		</div>
	
	
	</div>

</div>
</div>	
	<div class="footer">
		<div class="container">
		<div class="col-md-8 foot">
			<ul>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	
		
		</div>
	</div>
</body>
</html>