<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title><?php global $title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href= "themes/default/style.css" />
		
	</head>
	<body>
		<div id="all">
		
			<div id="header" class="alltime">
				<h1><a href=".">SUuuuuuUUUper Blog</a></h1>
				<div id="loginInOut">
					<?php displayLoginLogout(); ?>
				</div>
			</div>
			
			<div id="sidebar" class="alltime">
				<?php displaySidebar(); ?>
			</div>
			
			<div id="subSidebar" class="alltime">
		
			</div>
			
			<div id="displayAddAccount" class="display"> 
				<?php
					if ((isset($_SESSION["state"])) && ($_SESSION["state"]=="addAccount"))
					{
						displayAddAccount(); 
					}
				?>
			</div>
			
			<div id="displayAddArticle" class="display">
				<?php 
					if ((isset($_SESSION["state"])) && ($_SESSION["state"]=="addArticle"))
					{
						displayAddArticle(); 
					}
				?>
			</div>
			
			<div id="displayArticles" class="display"> 
				<?php 
					if ((isset($_SESSION["state"])) && ($_SESSION["state"]=="accueil"))
					{
						displayArticles(); 
					}
				?>
			</div>

			<div id="footer">
			</div>
		</div>
	</body>
</html>