<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>

<?php

if (isset($_POST['domain_register'])) {
	$d_name = $_POST['d_name'];
	$d_mob = $_POST['d_mob'];
	$d_descr = $_POST['d_descr'];
	$d_address = $_POST['d_address'];
	$SQL1 = "UPDATE domain SET d_name ='$d_name',  d_mob='$d_mob' , d_descr='$d_descr' , d_address ='$d_address'  WHERE d_email='$user'";
	mysql_query($SQL1);
	}

?>	


<div class="col-md-9 domain_form">
		
    	<div class="row ">
			<div class="col-md-9 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
<?php	
	$SQL = "SELECT * FROM domain WHERE d_email='$user' ";
	$result = mysql_query($SQL);
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['d_name'];
		$b = $db_field['d_pass'];
		$c = $db_field['d_email'];
		$d = $db_field['d_mob'];
		$e = $db_field['d_descr'];
		$f = $db_field['d_address'];
		$g = $db_field['d_id'];	
?>						
		<h2>
			ID :	<?php echo $g ; ?><br>
		 <?php echo $c ; ?><br>
		</h2>
					<form  action="domain_manage_setting.php" method="post" role="form" >
									
									
									<div class="form-group">
										<input type="text" name="d_name" tabindex="2" class="form-control" value="<?php echo $a ; ?>" >
									</div>
									
									<div class="form-group">
										<input type="text" name="d_mob" tabindex="2" class="form-control" value="<?php echo $d; ?>" >
									</div>
									<div class="form-group">
										<input type="text" name="d_address" tabindex="2" class="form-control" value="<?php echo $f ; ?>" >
									</div>
									<div class="form-group">
										<input type="text" name="d_descr" tabindex="2" class="form-control" value="<?php echo $e ; ?>">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												
												<input type="submit" name="domain_register"  tabindex="4" class="form-control  btn-register" value="UPDATE">
											</div>
										</div>
									</div>
								</form>


<?php } 

?>





						
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
	
	</div>
<?php include 'footer_domain.php';?>