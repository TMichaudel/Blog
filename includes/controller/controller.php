<?php
 	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);
	
	if(isset($_POST["action"]))
	{
		if ($_POST["action"]=="connexion")
		{
			authentifyUser($_POST["login"], $_POST["password"]);
		}
	
		if ($_POST["action"]=="deconnexion") 
		{
			desauthentifyUser();
		}
		
		if ($_POST["action"]=="Créer")
		{
			addAccount($_POST["login"], $_POST["password"], $_POST["name"], $_POST["firstName"]);
		}
		
		if ($_POST["action"]=="Ajouter")
		{
			addArticle($_POST["titre"], $_POST["contenu"], $_POST["image"]);
		}
		
		if ($_POST["action"]=="Changer")
		{
			loadTheme($_POST["theme"]);
		}
	}
	
	if(isset($_GET["actionMenu"]))
	{	
		if ($_GET["actionMenu"]==1)
		{
			$_SESSION["state"]="accueil";
			
		}
		
		if ($_GET["actionMenu"]==2)
		{
			$_SESSION["state"]="addAccount";
		}
		
		if ($_GET["actionMenu"]==3)
		{
			$_SESSION["state"]="addArticle";
		}
	}
	else 
	{
		$_SESSION["state"]="accueil";
	}
?>
