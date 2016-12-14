<?php

	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);

function loadArticles()
{
	$tableauArticles = array();
	$query = "SELECT IDarticle, titreArticle, contenuArticle, imageArticle, noteArticle, publieurArticle, 
				DATE_FORMAT(dateArticle, '%d/%m/%Y à %Hh%imin%ss') AS dateArticle FROM articles ORDER BY dateArticle DESC";
	$result = mysql_query($query);
	
	if ($result == FALSE)
	{
		die (mysql_error());
	}
	
	while($rows = mysql_fetch_assoc($result))
	{
		$article = new Article($rows["IDarticle"], $rows["titreArticle"], $rows["contenuArticle"], $rows["imageArticle"], 
								$rows["noteArticle"], $rows["publieurArticle"], $rows["dateArticle"]);
		$tableauArticles[] = $article;
	}
	
	return $tableauArticles;
}

function addArticle($titre, $contenu, $image)
{
	$sql="INSERT INTO articles (titreArticle, contenuArticle, imageArticle, publieurArticle, dateArticle) 
			VALUES ('".$titre."','".$contenu."','".$image."', '".$_SESSION['currentUser']."', NOW())";
	$result=mysql_query($sql);
	
	if ($result == FALSE)
	{
		die (mysql_error());
	}
	else{
		
		//articleAdded();
	}
}
?>