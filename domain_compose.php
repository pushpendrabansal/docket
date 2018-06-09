<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>
	<div class="groups user_list col-md-9">

<?php	
$msg = "";



if (isset($_POST['send'])) {
	$nem = $_POST['hid_nem'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	
	if($nem == 'all'){
		$sql = "SELECT * FROM domain WHERE d_email = '$user'";
		$result = mysql_query($sql);
		while ($db_field = mysql_fetch_assoc($result)) {
			$a = $db_field['d_id'];
			$sql1 = "SELECT * FROM info WHERE domain = '$a'";
			$result1 = mysql_query($sql1);
			while ($db_field = mysql_fetch_assoc($result1)) {
			$b = $db_field['email'];
			$SQL3 = "INSERT INTO messaging (to_receiver, from_sender, mail_subject,message) VALUES ('$b', '$user', '$sub', '$mes')";
			$result3 = mysql_query($SQL3);
			if(!$result3 ){
				die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'domain_compose.php'</script>");
			}
			
			$SQL4 = "INSERT INTO sent_items (to_receiver, from_sender, mail_subject, message) VALUES ('$b', '$user', '$sub', '$mes')";
			$result4 = mysql_query($SQL4);
			if(!$result4 ){
				die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
			}
			
			
		}
	}
			$msg = "Message Sent.";	

}
else{
	$SQL = "INSERT INTO messaging (to_receiver, from_sender, mail_subject,message) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'domain_compose.php'</script>");
	}
	
	$SQL = "INSERT INTO sent_items (to_receiver, from_sender, mail_subject, message) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
	}
	
	$msg = "Message Sent.";
}	
}
?>

<div class='domain_form form-group' >
		
		<form  action="domain_compose.php" method="post" role="form" >
									
									<div class="form-group"> 
										<b><font face='Arial' size = '3'>To :</font></b>
									</div>
									<div class="form-group">
										<input type="text" name="hid_nem" tabindex="2" class="form-control" value="" >
									</div>
									<div class="form-group"> 
										<b><font face='Arial' size = '3'>Subject : </font></b>
									</div>
									<div class="form-group">
										<input type="text" name="sub" tabindex="2" class="form-control" value="">
									</div>
									<div class="form-group">
										<b><font face='Arial' size = '3'>Mail:</font></b>
									</div>	
									<div class="form-group">
										<input type="text" name="mes" tabindex="2" class="form-control" value="">
									</div>
									
									<div class="form-group">
										
										<div class="col-sm-3 ">
												
												<input type="submit" name="send"  tabindex="4" class="form-control  btn-register" value="Send">
											</div>
											<div class="col-sm-3 col-md-offset-1">
												
												<input type="submit" name="cancel"  tabindex="4" class="form-control  btn-register" value="cancel">
											</div>
										
										
									
									</div>
									<br>
									<div class="form-group col-md-12">
										<br><?php echo $msg ; ?>	
									</div>
										
		</form>
		<p>1. For sending mail to all of the domain member please type 'all' in the sender mail id</p>
	</div>
		

</div>

<?php include 'footer_domain.php';?>