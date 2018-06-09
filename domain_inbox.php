<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>

	<div class="groups user_list col-md-9">
		<table border = "2"  width = "100%">
		<tr>
			<th></th>
			<td align = 'center'><b>From</b></td>
			<td><b>Subject</b></td>
			<td><b>Date</b></td>
			<td><b>Action</b></td>
		</tr>

				<?php
				

				$SQL = "SELECT * FROM messaging WHERE to_receiver = '$user' ORDER BY date_send DESC";
				$result = mysql_query($SQL);
				while ($db_field = mysql_fetch_assoc($result)) {
					$ctrl = $db_field['ctrl_no'];
					$a = $db_field['opened'];
					$b = $db_field['from_sender'];
					$c = $db_field['mail_subject'];
					$d = $db_field['date_send'];
					print("<tr>");
					if($a == 0){
						print("<td align = 'center' width = '40'><a href = 'domain_read_mail.php?key=".$ctrl."'> <i class='fa fa-envelope' aria-hidden='true'></i></a></td>");
					}
					else{
						print("<tr><td align = 'center' width = '1'><a href = 'domain_read_mail.php?key=".$ctrl."'><i class='fa fa-envelope-o' aria-hidden='true'></i></a></td>");
					}
					print("<td align = 'center'><b>$b</b></td>");
					if($c == ""){
						print("<td align = 'center' width = '150'>no subject</td>");
					}
					else{
						print("<td align = 'center' width = '150'>$c</td>");
					}
					print("<td align = 'center'>$d</td>");
					print("<td align = 'center' width ='75'><a href = 'domain_reply_mail.php?key=".$b."'><i class='fa fa-reply' aria-hidden='true'></i> </a>");
					print("<a href = 'domain_delete_mail.php?key=".$ctrl."'> <i class='fa fa-trash' aria-hidden='true'></i></a></td>");
					print("</tr>");
				}
				?>


	</table>
</div>

<?php include 'footer_domain.php';?>