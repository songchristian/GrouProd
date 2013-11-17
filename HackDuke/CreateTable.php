<?php
$user = $_GET['usera'];

$con = mysql_connect('localhost','root','');
if(!$con)
	{
	die('CANNOT CONNECT');
	}
$res = mysql_select_db("GrouProd",$con);
if(!$res)
	{
	die('CANNOT CONNECT');
	}
else
	{
	echo "Selected DB";
	}
	

$res = mysql_query("
	CREATE TABLE $user
	(
	w_id int NOT NULL AUTO_INCREMENT,
	NAME text NOT NULL,
	URL text NOT NULL,
	killit int,
	PRIMARY KEY (w_id)
	)",$con);

if(!$res)
	{
	echo mysql_error();
	}
	
	
	
	
?>