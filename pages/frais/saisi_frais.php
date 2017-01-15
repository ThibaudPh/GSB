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
<?php include("../../include/head.html") ?>
<title>Saisi des frais</title>
<body>
<?php include("../../include/header.html") ?>

<div id="page-wrapper">
  <div id="page">
    <div id="content">


    <div>
     
      
      <form id="formulaire" method="POST" action="#">
  <fieldset>
  <h1>PERIODE D'ENGAGEMENT:</h1>
  <label for="mois">Mois: </label>
            <input id="mois" name="mois" type="text" placeholder="ex: 03" />
          <label for="annee">Année: </label>
            <input id="annee" name="annee" type="text" placeholder="ex: 2005" />
<br /> <br/>

  <h1>Frais au forfait</h1>
    <label class="aligne">Repas midi: </label>
      <input type="text" name="repas" id="repas" size="5"  />
  <br />
    <label class="aligne">Nuitées: </label>
      <input type="text" name="nuit" id="nuit" size="5" />
  <br />
    <label class="aligne">Etape: </label>
      <input type="text" name="etape" id="etape" size="5"  />
  <br />
    <label class="aligne">Km: </label>
      <input type="text" name="km" id="km" size="5"  />
  <br />
      <input class="button-style-input" type="reset" name="requete" id="requete" value="Réinitialiser" />
<br />
      <input class="button-style-input" type="submit" name="requete" id="requete" value="Soumettre la requête" />
    </fieldset>
  </form>
</div>
    </div>
    <div id="sidebar">
    </div>
  </div>
</div>

<?php include("../../include/footer.html") ?>
</body>
</html>
