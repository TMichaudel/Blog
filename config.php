<?php

 	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);
	
	mysql_connect("localhost","root","");
	mysql_select_db("DB_BLOG") or die (mysql_error());
	mysql_query("set names = 'UTF8'");

	
	global $title ;
	$title = "SUuuuuuUUUper Blog";	
?>
