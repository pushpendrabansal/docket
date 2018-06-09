<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>


<?php
$ctrl = $_REQUEST['key'];
$SQL = "SELECT * FROM sent_items WHERE ctrl_no = '$ctrl'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$to = $db_field['to_receiver'];
	$date = $db_field['date_send'];
	$sub = $db_field['mail_subject'];
	$mess = $db_field['message'];
}

?>
<div class="groups user_list col-md-9">
<table  style="border:0px" width="100%">
	<tr><b><font face="Arial" size = "5">
		<td style="border:0px">to</td>
		<td style="border:0px"> <?php print $to; ?></td></font></b>
	</tr>
	<tr><b><font face="Arial" size = "3">
		<td style="border:0px">Date:</td>
		<td style="border:0px"><?php print $date; ?></td></font></b>
	</tr>	
	<tr><b><font face="Arial" size = "3">
		<td style="border:0px">Subject:</td>
		<td style="border:0px"><?php print $sub; ?></td></font></b>
	</tr>
	<tr>
		<td style="border:0px"></td>
		<td style="border:0px"><?php print $mess; ?></td>
	</tr>
</table></div><?php include 'footer_domain.php';?>