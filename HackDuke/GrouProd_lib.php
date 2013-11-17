<?php

$global_dbh = mysql_connect('localhost', 'root', '')
or die("Could not connect to database");
mysql_select_db('GrouProd', $global_dbh)
or die("Could not select database");
function display_db_query($query_string, $connection, $header_bool) {
	// query
	$result_id = mysql_query($query_string, $connection)
	or die("display_db_query:" . mysql_error());
	// find number of comments, not sure if this is still needed
	$column_count = mysql_num_fields($result_id)
	or die("display_db_query:" . mysql_error());
	// 
	print("<TABLE class='tables'>\n");
	// header print
	print("<TR ALIGN=LEFT VALIGN=TOP>");
	print("<th>Name</th>\n");
	print("<th>URL</th>\n");
	print("<th>Prod</th>");
	print("</TR>\n");

	// print the body of the table
	
	while($row = mysql_fetch_array($result_id)) {
		// print("<TR ALIGN=LEFT VALIGN=TOP>");
		// echo "<td>";
		// print_r($row);
		// echo "</td>";
		// for($column_num = 0; $column_num < $column_count-1; $column_num++) {
		// 	print("<TD>$row[$column_num]</TD>\n");

		// }
		
		// print("<TD><button type='button' val=''>prod</button></TD>");

		print("<TR ALIGN=LEFT VALIGN=TOP>");
		print("<TD>" . $row['NAME'] . "</TD>\n");
		print("<TD>" . $row['URL'] . "</TD>\n");
		print("<TD><button type='button' onclick=run_ajax(" . $row['w_id'] . ",'" . $row['NAME'] . "')>Get to work!</button></TD>");

		
		print("</TR>\n");
	}
	print("</TABLE>\n"); 
	print("<br>");
}

function display_db_table($tablename, $connection, $header_bool) {
	$query_string = "SELECT * FROM $tablename";
	display_db_query($query_string, $connection,
	$header_bool);
}

function get_table_name($connection){
	
	$result = mysql_query("SHOW TABLES FROM GrouProd");
	

	$tables =array($connection);
	$count = 0;
	while ($row = mysql_fetch_array($result)) {
    	$tables[$count] = $row[0]; 
    	$count++;
    	}
   
	for($k = 0; $k < count($tables); $k++){
		$table = $tables[$k];
		display_db_table($table, $connection, TRUE);
	}
}	




?>

