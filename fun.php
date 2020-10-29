<?php
error_reporting(E_ALL ^ E_DEPRECATED);//设置报警级别
$server="localhost";
$user="root";
$password="root";
$database="furniture";
$conn=mysql_connect($server,$user,$password);
@mysql_select_db($database,$conn) or die('mysql error!'.mysql_error());
mysql_query("SET NAMES UTF-8");
?>
