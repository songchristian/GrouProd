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

$res = mysql_query("DROP TABLE $user");
if(!$res)
	{
	echo mysql_error();
	}
?>