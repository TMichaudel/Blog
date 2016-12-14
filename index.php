<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);
	
	require("config.php");
	
	require("includes/model/user.Class.php");
	require("includes/model/users.php");
	require("includes/model/article.Class.php");
	require("includes/model/articles.php");
	
	session_start();

	require("includes/controller/controller.php");
		
	require("includes/view/view_fonction.php");
	require("includes/view/view.php");
?>
