<?php include 'header_domain.php';?>


<?php include 'sidebar_domain.php' ; ?>

	<div class="user_list groups col-md-9">
		<table border = "2" width = "100%">
			<tr class="bold">
				<td align = 'center'>Member/s</td>
				<td align = 'center'>Action</td>
			</tr>
				<?php
				$SQL = "SELECT * FROM info WHERE position != 'admin'";
				$result = mysql_query($SQL);
				while ($db_field = mysql_fetch_assoc($result)) {
						$a = $db_field['email'];
						$b = $db_field['name'];
				print("<tr><td align = 'left'><a href='viewuser.php?key=".$a."'>".$b."(".$a.")</a></td>");
				print("<td width = '70px' align = 'center'><a href = 'delete.php?key=".$a."'><i class='fa fa-trash'></i></a>");
				
				}
				
				?>
		</table>



			
					
				
			
		
	</div>
	

<?php include 'footer_domain.php';?>