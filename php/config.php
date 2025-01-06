<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<?php

$host="localhost";
$user="AhmadOzor";
$pass="Ahmad03325469";
$db="login-form";


$link= mysqli_connect($host,$user,$pass);
 if(!$link)
 die ("connection failed:  <br/>".mysql_error());
$dbase=mysqli_select_db($link,$db);
if(!$dbase)	
	echo
 "could not reach dataBase";



 
?>
</body>
</html>