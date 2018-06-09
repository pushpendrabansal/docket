
<?php include 'header_user.php';?>


<?php include 'sidebar_user.php' ; ?>



	<div class="col-md-10 dashboard"> 
		<table border = "0"  width = "100%">
			<tr>
				<th></th>
				<td align = 'center'><b>To</b></td>
				<td><b>Subject</b></td>
				<td><b>Date</b></td>
				<td><b>Action</b></td>
			</tr>
			<?php
				$SQL = "SELECT * FROM sent_items WHERE from_sender = '$user' ORDER BY date_send DESC";
				$result = mysql_query($SQL);
				while ($db_field = mysql_fetch_assoc($result)) {
					$ctrl = $db_field['ctrl_no'];
					$a = $db_field['opened'];
					$b = $db_field['to_receiver'];
					$c = $db_field['mail_subject'];
					$d = $db_field['date_send'];
					print("<tr>");
					if($a == 0){
						print("<td align = 'center' width = '40'><a href = 'user_read_send_mail.php?key=".$ctrl."'> <i class='fa fa-envelope' aria-hidden='true'></i> </a></td>");
					}
					else{
						print("<tr><td align = 'center' width = '40'><a href = 'user_read_send_mail.php?key=".$ctrl."'><i class='fa fa-envelope-o' aria-hidden='true'></i> </a></td>");
					}

					
					print("<td align = 'center'><b> $b</b></td>");


					if($c == ""){
						print("<td align = 'center' width = '150'>no subject</td>");
					}
					else{
						print("<td align = 'center' width = '150'>$c</td>");
					}
					print("<td align = 'center'>$d</td>");
					print("<td align = 'center' width ='60'>");
					print("<a href = 'user_delete_send_mail.php?key=".$ctrl."'> <i class='fa fa-trash' aria-hidden='true'></i></a></td>");
					print("</tr>");
				}
				?>
		</table>
	</div>
<?php include 'footer_user.php';?>