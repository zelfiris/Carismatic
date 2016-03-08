<?php
$message = false;
$pseudo = $_SESSION["pseudo"];
if($_SESSION['connect']){
    $message = 'Bonjour '.$pseudo.' bienvenue sur Carismatic, un large choix de véhicule est disponible, prenez le temps de choisir celui qui vous convient.';
}
else{
    $message = 'Bienvenue sur Carismatic.';
}
?>
    
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php echo $message; ?>

</body>
</html>