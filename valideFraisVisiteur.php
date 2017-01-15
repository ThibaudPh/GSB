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
<title>Validation frais visiteur</title>
<body>
<?php include("include/header.html") ?>

<div id="page-wrapper">
  <div id="page">
    <div id="content">
      <form action="#" method="post">
          <h1>Validation des frais par visiteur</h1>

  <label >Choisir le visteur</label>
    <select name="choix_visiteur">
            <option disabled selected> -- Choisir visiteur -- </option>
               <option></option>
               <option></option>
               <option></option>
               <option></option>
               <option></option>
               <option></option>
               <option></option>
               <option></option>
       </select>
    <br />

<label>Mois</label>
<input type="date" name="mois" />

<h1>frais au forfait</h1>

<table>
        <tr>
          <th class="first">Repas</th>
          <th>Nuitée</th>
          <th>Etape</th>
          <th>Km</th>
          <th>Situation</th>
        </tr>
        <tr class="row-a">
          <td class="first">
            <input class="petit" type="number" name="repas" /></td>
          <td>
            <input class="petit" type="number" name="nuit" /></td>
          <td>
            <input class="petit" type="number" name="etape" /></td>
          <td>
            <input class="petit" type="number" name="km" /></td>
            <td>
              <input type="radio" name="situation" /> <label>Valide</label>
                <br />
              <input type="radio" name="situation" /> <label>Non Valide</label>
        </tr>
</table>

<br />

<label>Nb Justificatifs</label>
    <input class="petit" type="number" name="justificatif" /> &nbsp &nbsp &nbsp 
       <input class="button-style-input" type="submit" name="calcul" id="calcul" value="Soumettre la requête" />

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