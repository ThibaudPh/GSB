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
<html>
<?php include("include/head.html") ?>
<title>Nouveau Visiteur</title>
<body>
<?php include("include/header.html") ?>

<div id="page-wrapper">
  <div id="page">
    <div id="content">
      <form action="#" method="POST">
        <h1>Visiteur</h1>

    <label class="aligneV">Identifiant:</label>
      <input class="text" name="identifiant" type="text"> 
    <br />

    <label class="aligneV">Nom:</label>
      <input class="text" name="nom" type="text">
      <br />

    <label class="aligneV">Prenom:</label>
      <input class="text" name="prenom" type="text">
      <br />

    <label class="aligneV">Adresse:</label>
      <input class="text" name="adresse" type="text">
      <br />

    <label class="aligneV">Ville:</label>
      <input class="text" name="ville" type="text">
      <br />

    <label class="aligneV">CP:</label>
      <input class="text" name="CP" type="text">
      <br />

    <label class="aligneV">Date embauche:</label>
      <input class="text" name="date embauche" type="date">
      <br />

    <label class="aligneV">Login:</label>
      <input class="text" name="login" type="text">
      <br />

    <label class="aligneV">Mot de passe:</label>
      <input class="text" name="mdp" type="text">
  
  <center>
       <input class="button-style-input" type="submit" name="calcul" id="calcul" value="Calculer" />
    </center>
  </form>
  <br />
    </div>
      <div id="sidebar">
        <h3>Module de Gestion de Fiche de frais</h3>
          <ul>
            <li><a href="#">Consulter les fiches de frais</a></li>
            <li><a href="/DR-PRO/pages/frais/saisi_frais.php">Renseigner les fiches de frais</a></li>
            <li><a href="../../connexion.php">Connexion</a></li>
          </ul>
      </div>
  </div>
</div>

<?php include("include/footer.html") ?>
</body>
</html>
