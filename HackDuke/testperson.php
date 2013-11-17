<?php
$ip = $_SERVER['REMOTE_ADDR'];

$tablename =  ip2long($ip);

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

$check = mysql_query("SELECT * FROM '$tablename'");
if(!$check)
	{
	echo "First time user, information being stored";

	$create = mysql_query("
	CREATE TABLE hi
	(
	p_id int NOT NULL AUTO_INCREMENT,
	website varchar NOT NULL,
	kill int NOT NULL,
	PRIMARY KEY(p_id)
	)",$con);

	if(!$create)
		{
		echo 'wtf';
		}
	}


//echo $tableExists





?>