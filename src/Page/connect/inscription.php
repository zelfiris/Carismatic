<!DOCTYPE html>
<html>
<!--<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blabla</title>

    <link href="css/page4.css" rel="stylesheet" type="text/css" />
    <script src="js/page4.js" type="text/javascript"></script>
    <style>
        /*The following are for this demo page only (not required for the ddmenu).*/
        body { background: #eee url(fd1.jpg) no-repeat center 0px; padding-top:90px;}
    </style>
    <center><img src="images/logo.png"/></center>
</head>
<body><center>
	<form action="app.php?p=inscription_ok" method = "post" enctype="multipart/form-data">
		<p><label>Adresse e-mail: <input type="text" name="email"/></label></p>
		<p><label>Prénom :<input type="text" name="prenom"/></label></p>
        <p><label>Nom de famille :<input type="text" name="nom"/></label></p>
		<p><label>Mot de Passe :<input type="password" name="mdp"/></label></p>
        <p><label>Adresse :<input type="text" name="adresse"/></label></p>
        <p><label>Code Postal :<input type="text" name="postal"/></label></p>
        <p><label>Ville :<input type="text" name="ville"/></label></p>
        <p><label>Téléphone :<input type="text" name="tel"/></label></p>
		<p><label><input type="submit" value="Envoyer"/></label></p>
	</form>
</center></body>
-->
    <body>
    <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="mdp">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Nom" name="nom">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
    </body>
</html>