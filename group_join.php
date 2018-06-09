<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>


<?php
$msg = "";
$date = date('y-m-d');
if (isset($_POST['group_join_submit'])) {
	$group_id = $_POST['group_id'];
	$SQL = "SELECT * FROM group_title";
	$result = mysql_query($SQL);
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['group_id'];
		if($group_id == $a){
			$sql2 = "INSERT INTO groups(group_id,user_email,doj,position) VALUES ('$group_id','$user','$date','member')";
			$result1 = mysql_query($sql2);
			if($result1){
			
				header("Location: userhomepage.php");
				break;
				
			}
			else{
				echo "error";
			}
		}
	}

	$msg = "Check Group id.";
	
}
?>



	<div class="user_login col-md-6 col-md-offset-4" id="login">
			<h2>Join Group</h2>

			<form method='post'  name='user_register' action='group_join.php'>
				 <p><span class="fa fa-users"></span><input type="text" name="group_id" placeholder="Group Id" required></p>
				
				 <p><input type="submit" value="submit" name="group_join_submit"></p>
			</form>

			<p><?php print $msg; ?></p>
			
			
			
		
			
	
	</div>
<?php include 'footer_user.php';?>