
<div class="main dash">
 <div class="container">
	<div class="col-md-2 grouplist">
			<div class="grouplist2">
					<h2>Messages</h2>
					<i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
					<a href="user_compose.php" class="addgroup " type="button"> Compose</a>
				<br>
					<i class="fa fa-envelope " aria-hidden="true"></i>
					<a href="user_inbox.php" class="addgroup " type="button"> Inbox(<?php
					  				$mess = 0;
					  				$count = 0;
					  				$sql = "SELECT * FROM messaging WHERE to_receiver = '$user' AND opened = 0";
					  				$result = mysql_query($sql);
					  				while ($db_field = mysql_fetch_assoc($result)) {
										$count = $count + 1;
									}
									
										echo $count ;
								?>)</a>
				<br>
					<i class="fa fa-send " aria-hidden="true"></i>
					<a href="user_send.php" class="addgroup " type="button"> Send Mail</a>
				<br>
				<hr class="hr">	
			</div>	
			<div class="grouplist1">
				<h2>Groups</h2>
					<ul>
						<?php
							$SQL = "SELECT * FROM groups WHERE user_email='$user' ";
							$result = mysql_query($SQL);
								while ($db_field = mysql_fetch_assoc($result)) {
									$a = $db_field['group_id'];
									$c = $db_field['position'];
									if($c == 'admin'){
									$SQL = "SELECT * FROM group_title WHERE group_id='$a' ";
									$result1 = mysql_query($SQL);
										while ($db_field = mysql_fetch_assoc($result1)) {
												$b=$db_field['group_name'];
												echo '<li><a href="viewgroup1.php?key='.$a.'">'.$b.'</a><sup>Leader</sup></li>';
										}
									}
									else{
										$SQL = "SELECT * FROM group_title WHERE group_id='$a' ";
										$result1 = mysql_query($SQL);
										while ($db_field = mysql_fetch_assoc($result1)) {
												$b=$db_field['group_name'];
												echo '<li><a href="viewgroup1.php?key='.$a.'">'.$b.'</a></li>';
										}
									}	
								}					
						?>
					</ul>
				<hr class="hr">	
			</div>
			<div class="grouplist2">
				
					<a class="addgroup " type="button" href="group_join.php">Join Group</a><br>
					<a class="addgroup " type="button" href="group_create1.php">Create Group</a>
			</div>	
		<div class="clearfix"></div>
	</div>



