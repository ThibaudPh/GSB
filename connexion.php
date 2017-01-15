<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : OpenHouse 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120923
-->
<?php 
@$id  = $_POST["id"];
@$mdp  = $_POST["mdp"];

//Faire requête de lecture de la table "connexion" dans la base de donnée pour comparez l'identifiant et le mot de passe par rapport à ce qui a été écrit par l'utilisateur sur le formulaire.


 ?>

<html>
<?php include("include/head.html") ?>
<title>Connexion</title>
<body>
<?php include("include/header.html") ?>

<div id="page-wrapper">
	<div id="page">
		<div id="content">
			<form id="connexion" method="POST" action="#">
				<label class="aligne" for="id">Identifiant: </label>
     				<input type="text" name="id" id="id" size="10" required />
     					<br />
     			<label class="aligne" for="mdp">Mot de passe: </label>
    				<input type="password" name="mdp" id="mdp" size="10" required />
    					<br />
   				<input class="button-style-input" type="submit" name="connexion" id="connexion" value="Se connecter" />
			</form>
		</div>
		
	</div>
</div>

<?php include("include/footer.html") ?>
</body>
</html>
