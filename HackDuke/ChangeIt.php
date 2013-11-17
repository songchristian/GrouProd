<?php
$user = $_GET['usera'];
$urls = explode('~~', $_GET['urls']);

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
	echo "Selected DB <br />";
	}

$res = mysql_query("TRUNCATE TABLE $user");
if(!$res)
	{
	echo "hi" . mysql_error();
	}


for ($loop = 1; $loop < count($urls); $loop++)
	{
	echo $urls[$loop];
	$doit = mysql_query("INSERT INTO $user (NAME, URL, killit) 
	VALUES ('$user','$urls[$loop]',1)",$con);
	if(!$doit)
		{
		echo mysql_error();
		}
	}
?>