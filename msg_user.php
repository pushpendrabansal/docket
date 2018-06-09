<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>
	<div class="groups user_list col-md-9">

<?php	
$msg = "";
$ne = $_REQUEST['key'];

if (isset($_POST['send'])) {
	$user = $_SESSION['username'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	$nem = $_POST['hid_nem'];


	$SQL = "INSERT INTO messaging (to_receiver, from_sender, mail_subject,message) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'userhome.php'</script>");
	}
	
	$SQL = "INSERT INTO sent_items (to_receiver, from_sender, mail_subject, message) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'userhome.php'</script>");
	}


	$msg = "Message Sent.";

}
?>

<div class='domain_form form-group' style="color: #000">
		
		<form  action="msg_user.php" method="post" role="form" >
									
									<div class="form-group"> 
										<b><font face='Arial' size = '3'>To :</font></b>
									</div>
									<div class="form-group">
										<input type="text" name="hid_nem" tabindex="2" class="form-control" value="<?php echo $ne ; ?>" >
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
	</div>
		
<?php

mysql_close($db_handle);

?>
</div>
<?php include 'footer_user.php';?>