<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', true);

function isConnected()
{
	if ((isset($_SESSION["isConnected"])) && ($_SESSION["isConnected"]==0))
		return false;
	else if ((isset($_SESSION["isConnected"])) && ($_SESSION["isConnected"]==1))
		return true;
	else 	
		return false;
}

function authentifyUser($login, $password)
{
	$sql="select firstName, name from users where login='".$login."' and password='".md5($password)."'";
	$result=mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	
	if ($result == FALSE) 
	{
		die (mysql_error());
	}
	
	if ($row == 0)
	{
		$_SESSION["isConnected"]=0;
		//noAccount();
	}
	
	else
	{
		$_SESSION["isConnected"]=1;
		$_SESSION["currentUser"]=$row['firstName']. " ".$row['name'];
	}
}

function desauthentifyUser()
{
	$_SESSION["isConnected"]=0;
	session_destroy();
}


function addAccount($login, $password, $name, $firstName)
{
	$sql="INSERT INTO users (login, password, name, firstName) VALUES ('".$login."','".md5($password)."','".$name."','".$firstName."')";
	$result=mysql_query($sql);
	
	if ($result == FALSE) 
	{
		die (mysql_error());
	}
	else {
		//accoutCreated();
	}
}?>