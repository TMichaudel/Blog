<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', true);

function displayLoginLogout()
{
	if (isConnected()==0)
	{
		displayLogin();
	}
	
	else if(isConnected()==1)
	{
		displayLogout();
	}
}

function displayLogin()
{
	?>
		<h2>Se conneter :</h2>
		<form method="post" action="index.php">
			<table>
				<tr>
					<td><label for"login">Login :</label></td>
					<td><input type="text" name="login" size="20" /></td>
				
					<td><label for"password">Mot de passe :</label></td>
					<td><input type="password" name="password" size="20" /></td>
				
					<td><input type="submit" name="action" value="connexion" size="20" /></td>
				</tr>
			</table>
		</form>
	<?php
}

function displayLogout()
{
	?>
		<h2>Se deconneter :</h2>
		<form method="post" action="index.php">
			<table>
				<tr><td><?php echo $_SESSION["currentUser"]; ?></td></tr>
				<tr><td><?php echo "Est connecte(e)\n"; ?></td></tr>
				<tr><td><input type="submit" name="action" value="deconnexion" size="20" /></td></tr>
			</table>
		</form>
	<?php
}

function displaySidebar()
{
	echo 	"<a href='index.php'>Actualité</a> <\t>  ";
	if (isConnected()==0)
	{
			echo "<a href='index.php?actionMenu=2'>Inscription</a>  <\t>";
	} 
	else if (isConnected()==1)
	{
			echo "<a href='index.php?actionMenu=3'>Publier</a> <\t>";
	};
}



function displayAddAccount()
{
		?>
			<h2>Creation compte :</h2>
			<form method="post" action="index.php">
				<table>
					<tr>
						<td><label for="name">Nom :</label></td>
						<td><input type="text" name="name" size="20" /></td>
					</tr>
					<tr>
						<td><label for="firstName">Prenom :</label></td>
						<td><input type="text" name="firstName" size="20" /></td>
					</tr>
					<tr>
						<td><label for="login">Login :</label></td>
						<td><input type="text" name="login" size="20" /></td>
					</tr>
					<tr>
						<td><label for="password">Mot de passe :</label></td>
						<td><input type="password" name="password" size="20" /></td>
					</tr>
					<tr>
						<td><label for="password2">Confirmer mot de passe :</label></td>
						<td><input type="password" name="password2" size="20" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="action" value="Créer" size="20" /></td>
					</tr>
				</table>
			</form>
		<?php
}

function displayAddArticle()
{
		?>
		<h2>Ajouter article :</h2>
		<form method="post" action="index.php">
			<table>
				<tr>
					<td><label for="titre">Titre :</label></td>
					<td><input type="text" name="titre" size="20" /></td>
				</tr>
				<tr>
					<td><label for="contenu">Contenu :</label></td>
					<td><textarea name="contenu" cols="30" rows="5"/>Commentez...</textarea></td>
				</tr>
				<tr>
					<td><label for="image">Images :</label></td>
					<td><input type="text" name="image" value="url" size="20" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="action" value="Ajouter" size="20" /></td>
				</tr>
			</table>
		</form>
		</div>
		<?php
}

function displayArticles()
{
	$tableauArticles = loadArticles(); 
	foreach($tableauArticles as $article)
	{
		?> <div id="showArticle">
		<?php echo $article; ?>
		</div> <?php 
	}
}

function accoutCreated()
{
	echo "Création de Compte okay";
}

function noAccount()
{
	echo "Login invalide, Compte Inexistant";
}

function articleAdded()
{
	echo "l'ajout de l'article est okay!";
}

?>
