
<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>


	<div class="col-md-10 dashboard"> 
				<?php	
				$msg = "";


				if (isset($_POST['cancel'])) {
					print "<script>location.href = 'messages.php'</script>";
				}
				else if (isset($_POST['send'])) {
					$user = $_SESSION['username'];
					$nem = $_POST['hid_nem'];
					$sub = $_POST['sub'];
					$mes = $_POST['mes'];
					
					if($nem == 'admin'){
						$sql1 = "SELECT * FROM info WHERE email ='$user'";
						$result1=mysql_query($sql1);
						while ($db_field = mysql_fetch_assoc($result1)) {
								$aa = $db_field['domain'];
								$sql2 = "SELECT * FROM domain WHERE d_id ='$aa'";
								$result2=mysql_query($sql2);
								while ($db_field = mysql_fetch_assoc($result2)) {
								$aaa = $db_field['d_email'];
								$nem = $aaa;
								}	
						}	
					}

					$SQL = "INSERT INTO messaging (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
					$result = mysql_query($SQL);
					if(!$result ){
						die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
					}
					
					$SQL = "INSERT INTO sent_items (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
					$result = mysql_query($SQL);
					if(!$result ){
						die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
					}
					
					$msg = "Message Sent.";
					}
				
				?>

		<div class='domain_form form-group' >
		
			<form  action="user_compose.php" method="post" role="form" >
										
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
										<b><font face='Arial' size = '3'>Mail: </font></b>
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
		<p style="color:#000">1. Your Domain Admin Email Id : admin</p>
		
	</div>

</div>



<?php include 'footer_user.php';?>