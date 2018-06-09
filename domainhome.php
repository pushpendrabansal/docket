<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>

	<div class="col-md-9 domain_form">
		
    	<div class="row ">
			<div class="col-md-9 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						
						<div class="col-md-6">
							<h2>Group List</h2>
							<?php
								$SQL = "SELECT * FROM domain WHERE d_email='$user' ";
							 	$result = mysql_query($SQL);
								while ($db_field = mysql_fetch_assoc($result)) {
									$domain = $db_field['d_id'];
									$SQL = "SELECT * FROM group_title WHERE group_domain='$domain'";
									$result = mysql_query($SQL);
									while ($db_field = mysql_fetch_assoc($result)) {
										$a = $db_field['group_name'];
										$b = $db_field['group_id'];
										echo '<a href="viewgroup.php?key='.$b.'">'.$a.'</a><br>';
								}}									
							?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
	
	</div>

<?php include 'footer_domain.php';?>