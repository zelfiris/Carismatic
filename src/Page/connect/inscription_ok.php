<?php  
$email = htmlspecialchars($_POST['email']);
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$pass = htmlspecialchars($_POST['mdp']);
$adresse = htmlspecialchars($_POST['adresse']);
$postal = htmlspecialchars($_POST['postal']);
$ville = htmlspecialchars($_POST['ville']);
$tel = htmlspecialchars($_POST["tel"]);
$bdd = new PDO('mysql:host=localhost;dbname=voiture;charset=utf8','root','');
$reponse=$bdd->query('SELECT ID_Client FROM client WHERE email="'.$email.'"');
$message = false;

if(empty($email)){
	echo 'Merci de rentrer une adresse e-mail.';
}
elseif(empty($prenom)){
	echo "Merci de rentrer un prenom.";
}
elseif(empty($nom)){
	echo "Merci de rentrer un nom de famille";
}
elseif(empty($pass)){
	echo "Merci de rentrer un mot de passe.";
}
elseif(empty($adresse)){
	echo "Merci de rentrer une adresse."{
}
elseif ($reponse->fetchColumn()) {
	$message = 'L\'adresse n\'est pas disponible';
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
	$message= 'Merci de rentrer une adresse valide.';
}

else {
	$requete = $bdd->prepare('INSERT INTO utilisateurs(adresse,pseudo,pass,date_inscription) VALUES(?,?,?,CURDATE())');
	$requete ->execute(array(
							$adresse,
							$pseudo,
							$pass,
							));
	$message = 'Vous avez ajouté un nouvel utilisateur';
}
?>

<!DOCTYPE html>
<html>
	<body>
		<?php if ($message) : ?>
			<p><?php echo $message ?></p>
		<?php endif ?>
	</body>
</html>