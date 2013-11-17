<?php //for first time users, the server must run this to setup up the database.
$con = mysql_connect("localhost","root","");
if(!$con)
	{
	die("coudln't connect! error: ".mysql_error());
	}
echo "Connection has been made!<br />";

$res = mysql_query("CREATE DATABASE GrouProd",$con);
if(!$res)
	{
	echo "Can't create db: " . mysql_error() . "<br/>";
	}
else
	{
	echo "Created DB! <br />";
	}
?>