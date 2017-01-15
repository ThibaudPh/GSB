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
<title>Simulation de frais</title>
<body>
<?php include("../../include/header.html") ?>

<div id="page-wrapper">
  <div id="page">
    <div id="content">


    <div>
      <h2>SIMULATION DES FRAIS</h2>
      <p class="subtitle">Simuler vos frais de déplacement professionnel</p>
        <p>Les frais forfaitaires doivent être justifiés par une facture acquittée 
            faisant apparaître le montant de la TVA. Ces documents ne sont pas à joindre 
            à l'état de frais mais doivent être conservés pendant trois années. Ils peuvent 
            être contrôlés par le délégué régional ou le service comptable.</p>     
<br />
      <h4>
Tarifs en vigueur au 01/01/2016 (Prix au kilomètre selon la puissance du véhicule déclaré).</h4>
      <ul>
        <li>(Véhicule 4CV Diesel) 0.52 € / Km</li>
        <li>(Véhicule 5/6CV Diesel) 0.58€ / Km</li>
        <li>(Véhicule 4CV Essence) 0.62€ / Km</li>
        <li>(Véhicule 5/6CV Essence) 0.67€ / Km</li>
      </ul>
      
<form id="formulaire" method="POST" action="resultat_simu.php">
  <!-- Partie 1 -->
    <label for="nuit">Nuitée: </label>
       <input type="text" name="nuit" id="nuit" size="5" />
    <label for="repas">Repas midi: </label>
        <input type="text" name="repas" id="repas" size="5" />
    <label for="km">Kilométrage: </label>
       <input type="text" name="km" id="km" size="5" />
<!-- Fin partie 1 -->
<br /> <br/>
<!-- Partie 2 -->
    <label>Type du véhicule:</label>
      <label>Essence</label>
        <input type="radio" name="vehicule" id="essence" value="essence" />
      <label>Diesel </label>
       <input type="radio" name="vehicule" id="diesel" value="diesel" />
<br /> <br />
    <label>Puissance du véhicule:</label>
      <label>4 CV</label>
       <input type="radio" name="puissance" id="4cv" value="4cv"/>
      <label>5/6 CV </label>
        <input type="radio" name="puissance" id="56cv" value="5/6cv" />
        <!-- fin partie 2 -->
<br />
    <center>
       <input class="button-style-input" type="submit" name="calcul" id="calcul" value="Calculer" />
    </center>
</form>

      <br />
    </div>
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

<?php include("../../include/footer.html") ?>
</body>
</html>
