	<?php
	require '../GrouProd_lib.php';

	$result = mysql_query("SHOW TABLES FROM GrouProd");
	
	$tables =array($global_dbh);
	$count = 0;
	while ($row = mysql_fetch_array($result)) {
    	$tables[$count] = $row[0]; 
    	$count++;
    	}
   
	for($k = 0; $k < count($tables); $k++){
		$table = $tables[$k];
		display_db_table($table, $global_dbh, TRUE);
	}
		?>