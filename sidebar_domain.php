
<div class="main">
<div class="container">
	
	<div class="col-md-3 domainbar" >

		<i class="fa fa-pencil " aria-hidden="true"></i>
		<a href="domain_compose.php" style="color:#fff"> Compose</a>
	<br>
		<i class="fa fa-envelope " aria-hidden="true"></i>
		<a href="domain_inbox.php" style="color:#fff"> Inbox</a><?php
					  				$mess = 0;
					  				$count = 0;
					  				$sql = "SELECT * FROM messaging WHERE to_receiver = '$user' AND opened = 0";
					  				$result = mysql_query($sql);
					  				while ($db_field = mysql_fetch_assoc($result)) {
										$count = $count + 1;
									}
									
										echo $count ;
								?>	
	<br>
		<i class="fa fa-send " aria-hidden="true"></i>
		<a href="domain_send.php" style="color:#fff"> Send Mail</a>
	<br>
		<i class="fa fa-plus " aria-hidden="true"></i>
		<a href="group_create.php" style="color:#fff"> Create Group</a>
	<br>
		<i class="fa fa-eye" aria-hidden="true"></i>
		<a href="domain_view_group.php" style="color:#fff">View Group</a>
	<br>
		<i class="fa fa-plus " aria-hidden="true"></i>
		<a href="add_user.php" style="color:#fff"> Add User</a>
	<br>	
		<i class="fa fa-steam" aria-hidden="true"></i>
		<a href="domain_manage_user.php" style="color:#fff">Manage User</a>		
	<br>
		<i class="fa fa-cog" aria-hidden="true"></i>
		<a href="domain_manage_setting.php" style="color:#fff">Domain Settings</a>
	
	</div>
