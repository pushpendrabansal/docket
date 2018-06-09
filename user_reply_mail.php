<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>


	<div class="col-md-10 dashboard"> 
		

<?php	
$msg = "";

if (isset($_POST['cancel'])) {
	print "<script>location.href = 'domain_inbox.php'</script>";
}
else if (isset($_POST['send'])) {
	$user = $_SESSION['username'];
	$nem = $_POST['hid_nem'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	
	$SQL = "INSERT INTO sent_items (to_receiver,from_sender,mail_subject,message) VALUES ('$nem', '$user', '$sub', '$mes')";
	mysql_query($SQL);
	
	$SQL = "INSERT INTO messaging (to_receiver,from_sender,mail_subject,message) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);

	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'user_inbox.php'</script>");
	}
	$msg = "Message Sent.";
	
}
else{
	$name = $_REQUEST['key'];
}	

?>

<div class='domain_form form-group' >
	<form  action="user_reply_mail.php" method="post" role="form" >
									
									<div class="form-group"> 
										<b><font face='Arial' size = '3'>To: <?php echo $name ; ?> </font></b><br>
										<b><font face='Arial' size = '3'>Subject:</font></b>
									</div>
									<div class="form-group">
										<input type="hidden" name="hid_nem" tabindex="2" class="form-control" value="<?php echo $name ; ?>" >
									</div>
									<div class="form-group">
										<input type="text" name="sub" tabindex="2" class="form-control" value="">
									</div>
									<b><font face='Arial' size = '3'>Mail:</font></b>
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

</div>
<?php include 'footer_user.php';?>