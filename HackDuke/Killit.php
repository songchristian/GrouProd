<?php
$user = $_GET['usera'];
$WID = $_GET['WID'];

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

$result = mysql_query("UPDATE $user SET killit = 0 WHERE w_id = '$WID'");

if(!$result)
	{
	echo mysql_error();
	}
?>