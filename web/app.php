<?php
session_start();



$src = __DIR__.'\..\src\\';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carismatic</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link href="css/page4.css" rel="stylesheet" type="text/css" />
    <script src="js/page4.js" type="text/javascript"></script>
    <style>
        /*The following are for this demo page only (not required for the ddmenu).*/
        body { background: #eee url(fd1.jpg) no-repeat center 0px; padding-top:90px;}
    </style>
    <center><img src="images/logo.png"/></center>
</head>
<body>
    <?php
        include ($src.'Page/menu/menu.php');
    ?>

<?php
$src = __DIR__.'\..\src\\';
if(!isset($_GET['p'])){
	include($src.'Page\index.php');
}
elseif ($_GET['p'] == 'compte'){
	include($src.'Page\connect\compte.php');
}
elseif($_GET['p'] == 'inscription_ok'){
	include($src."Page/Connect/inscription_ok.php");
}
elseif($_GET['p'] == 'inscription'){
	include($src."Page/Connect/inscription.php");
}
elseif($_GET['p'] == 'connexion'){
	include($src."Connect/connexion.php");
}
elseif($_GET['p'] == "deconnexion"){
	include($src."Page/Connect/disconnect.php");
}
else{
	//pas assez de droits
	include($src.'Page\402.php');
}
?>
    <div style="margin:400px auto 40px; width:260px; font:normal 12px/16px Arial;">
    </div>
</body>
</html>