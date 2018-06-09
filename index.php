
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

  	<style type="text/css">
  		.highlighted {
					    background-color: rgba(0,0,0,.55);
						color: white;
						font-family:opensans;
					}	
		

			
  	</style>	
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
		<li><a href="usersignup.php">Sign Up</a></li>
		<li><a data-toggle="modal" data-target="#myModal3" style="cursor:pointer">How to Use ?</a></li>
      </ul>

      <div id="myModal3" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">How to Use</h4>
							      </div>
							      <div class="modal-body">
							      	We have different domains under which there are several group and each group has a group head(who creates it) and its members.<br>
									We have four different type of users:<br>
									Admin<br>Domain head<br>Group head<br>Group members<br><br>

									<b>Note: LNMIIT Domain id:639333358</b><br><br>

									Here are the guidelines on how to use this website:<br>
									<b><br>As a Domain:<br></b>
									1. Login/signup to proceed or You can <b>create you own domain</b> from homepage and then proceed.<br>
									2. You may login as Domain head to view the activity flow of domain head.(sample credentials:   <br> username:bansalpunit96@gmail.com<br> password:qqq)<br>
									3. You can view all users.<br>
									4. You can update your account information.<br>
									
									<br><br><b>As a user:</b><br>
									1. You will be directed to user homepage where you can create your own group, join group by giving groupid as given by group heads.
									2. You can visit groups and see all the peer members.<br>
									3. You can send message to other users.<br>
									4. You can see the calendar with added events.<br>
									5. You can update user account information in settings section.<br>
									6. You can view recent notifications(will be covered in sprint3).<br>


							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

							  </div>
						</div>
    </div>
  </div>
</nav>

<div class="main" style="background:url(images/head1.jpg)">
	<div class="main1">
		<div class="container">
		


			<div class="col-md-12" class=""><br><br>
				<p class="highlighted" style="font-size: 2.6em">&nbsp;&nbsp;Docket is designed for scheduling and organising your time table and &nbsp;&nbsp;events<br><br>
				&nbsp;docket = google group + gmail + task<br>
				
				&nbsp;&nbsp;1. You can create or join group within your domain.<br>
				&nbsp;&nbsp;2. You can send email to anyone or to group within your community. <br>
				&nbsp;&nbsp;3. You can make announcement in group.<br>
				&nbsp;&nbsp;4. You can add task.<br>
				&nbsp;&nbsp;5. You can add task for whole group member as a group head. 
				</p><br>
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
				<li><a href="domainregister.php">Domain</a></li>

			</ul>
		</div>
		<div class="col-md-4" style="position: relative;">
			<div style="position: absolute;right: 0;color: #fff">
				Code <a href=""><i class="fa fa-github fa-3x" style="background: #fff"></i></a>
			</div>
		</div>
	
		
		</div>
</div>


</body>
</html>