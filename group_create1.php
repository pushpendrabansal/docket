<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>



	<?php
	$msg = "";
if (isset($_POST['group_create_submit'])) {
	$group_name = $_POST['group_name'];
	$group_desc = $_POST['group_desc'];
	$domain_id = $_POST['domain_id'];
	$group_id = rand() % 9999;
	$date = date("Y-m-d");
	$sql="INSERT INTO groups(user_email,doj,group_id,position) VALUES('$user','$date','$group_id','admin')";
	$result = mysql_query($sql);
	$SQL = "INSERT INTO group_title (group_name,group_desc,group_domain,group_leader,group_id,group_create) VALUES ('$group_name','$group_desc','$domain_id','$user','$group_id','$date')";
		$result = mysql_query($SQL);
		if($result){
			
			$msg = 'Group succesfully added.<br>Group Id : '.$group_id.'';
		}
		else{
		
			$msg = "Error adding group";
		}
}
?>


	<div class="user_login col-md-6 col-md-offset-3" id="login">
			<h2>Create Group</h2>

			<form method='post'  name='user_register' action='group_create1.php'>
				 <p><span class="fa fa-users"></span><input type="text" name="group_name" placeholder="Group Name" required></p>
				 <p><span class="fa fa-ellipsis-h"></span><input type="text" name="group_desc" placeholder="Group Description" required></p>
				 <p><span ><i class="fa fa-university" aria-hidden="true"></i></span><input type="text" placeholder="Domain ID" required name="domain_id"></p> 
				 <p><input type="submit" value="submit" name="group_create_submit"></p>
			</form>

			<p><?php print $msg; ?></p>
		
			
	
	</div>
<?php include 'footer_user.php';?>