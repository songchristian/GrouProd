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

$result = mysql_query("SELECT killit FROM $user");

if(!$result)
	{
	echo mysql_error();
	}
$killer = "";
while($welll = mysql_fetch_array($result))
	{
	$killer = $killer . $welll[0];
echo $killer;
	}
?>
