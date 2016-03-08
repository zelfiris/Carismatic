<!DOCTYPE html>
<html>
	<body>
		<center><form action="app.php?p=compte" method="post" enctype="multipart/form-data">
			<p><label>Identifiant :<input type="text" name="identifiant"></label></p>
			<p><label>Mot de passe :<input type="password" name="mdp"></label></p>
			<p><label>Rester connecter :<input type="checkbox"name="connecter"></p>
			<p><input type="submit" value="connexion"></p>
		</form>
		<form action="creation_compte.php" method="post" enctype="multipart/form-data">
			<p><input type="submit" value="Créer un compte"></p>
		</form>
		</center>

	</body>
</html>