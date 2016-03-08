<?php 
$_SESSION["connect"]=false;
$_SESSION["pseudo"]= false;
$bdd = new PDO('mysql:host=localhost;dbname=voitures;charset=utf8','root','');
$reponse = $bdd->query('SELECT id,pass FROM utilisateurs WHERE pseudo = "'.$_POST['identifiant'].'"');
$message = false;
$donnees = $reponse->fetch();
if(empty($_POST["identifiant"])){
	$message="Merci de renseigner un identifiant.";
}
elseif(empty($_POST["mdp"])){
	$message="Merci de renseigner votre mot de passe.";
}
elseif(!$donnees){
	$message='Il n\'existe pas d\'utilisateurs avec ce pseudo.';
}
else{

	if($donnees["pass"] == $_POST["mdp"]){

		$_SESSION["connect"] = true;
		$message ="Vous êtes connecté.";
		$_SESSION["pseudo"] = $_POST["identifiant"];

	}
	else{

		$message = "Le mot de passe est incorrect.";
	}
}

?>

<!DOCTYPE html>
<html>
	<body>
		<?php echo $message; ?>
	</body>
</html>