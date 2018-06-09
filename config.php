<?php    
    $host = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $db = "docket"; 
    $p = mysql_connect($host, $user, $pass); 
    $db_handle = mysql_select_db($db, $p);
if (!$db_handle) {
	die("DATABASE not found!");
}
 
?>
