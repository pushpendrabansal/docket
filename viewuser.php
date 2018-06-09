<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>

	<div class="col-md-9 domain_form">


			<div class="row">
				<div class="">
			
<?php
$namekey = $_REQUEST['key'];
$SQL = "SELECT * FROM info WHERE email = '$namekey'";
$result = mysql_query($SQL);

while ($db_field = mysql_fetch_assoc($result)) {
	$a = $db_field['email'];
	$k = $db_field['name'];
	$b = $db_field['mobile'];
	$c = $db_field['doj'];
?>
	
<div class="description"><p><h2><?php echo $k ; ?>
				<a href="delete.php?key=<?php echo $a ; ?>" class="btn btn-warning right">delete</a>
				<a href="domain_message.php?key=<?php echo $a ; ?>" class="btn btn-warning right">message</a></p><?php echo $a; ?></h2>
				Mobile : <?php echo $b ;?><br>
				Date Of Joining : <?php echo $c ;?>
</div>
<?php
	}
?>

	<table style="background: #fff;font-weight: bolder;">
	
		<tr>
			<td style="padding: 10px 10px">Groups</td>
			
			<td style="padding: 10px 10px">Position</td>
			<td style="padding: 10px 10px">Date of joining</td>
		</tr>
<?php 
$SQL = "SELECT * FROM groups WHERE user_email = '$namekey'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$a = $db_field['doj'];
	$b = $db_field['group_id'];
	$d = $db_field['position'];
	$SQL1 = "SELECT * FROM group_title WHERE group_id = '$b'";
	$result1 = mysql_query($SQL1);
	while ($db_field = mysql_fetch_assoc($result1)) {
		$c = $db_field['group_name'];
		echo '<tr>';
		echo '<td><a href="viewgroup.php?key='.$b.'" style="color:#000">'.$c.'</a></td>';
		echo '<td>'.$d.'</td>';
		echo '<td>'.$a.'</td>';
		echo '</tr>';

}}
?>
	</table>

	</div>
</div>
</div>	


<?php include 'footer_domain.php';?>